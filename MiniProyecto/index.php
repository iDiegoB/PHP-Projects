<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
#Inicializar una nueva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL);
#Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
#Ejecutar la petición
$result = curl_exec($ch);
// una alternativa seria usar file_get_contents
// $result = file_get_contents(API_URL); // si solo quieres hacer un GET de una API
$data = json_decode($result, true);
//var_dump($data);
?>

<head>
    <meta charset="UTF-8">
    <title>La próxima película de Marvel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Diego Barra">
    <meta name="description" content="Página para consultar la próxima película de Marvel">
    <meta name="keywords" content="Marvel, Películas, Próxima, MCU, Cine, Superhéroes">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Spanish">
    <meta name="revisit-after" content="7 days">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<body>
    <main>
        <section>
            <img src="<?= $data['poster_url']; ?>" width="300px" alt="Poster de <?= $data["title"]; ?>" style="border-radius: 16px" />
            <h2>La próxima película de Marvel</h2>
        </section>
        <hgroup>
            <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
            <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
            <p>Descripción: <?= $data["overview"]; ?></p>
            <p>la siguiente es: <?= $data["following_production"]["title"]; ?></p>
        </hgroup>
    </main>
</body>

<style>
    :root {
        color-scheme: light dark;
        background-color: whitesmoke;
    }

    body {
        display: grid;
        place-content: center;
    }

    img {
        margin: 0 auto;
    }

    section {
        display: block;
        text-align: center;
        margin-bottom: 16px;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>