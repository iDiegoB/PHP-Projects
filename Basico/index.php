<?php
//variables
$name = 'Diego';
$isDev = true;
$age = 23;
// && y || o
$isOld = $age > 40;
/*
if ($isOld) {
    echo "<h2>Eres viejo</h2> <br>";
} elseif ($isDev) {
    echo "<h2>No eres viejo, pero eres dev. :b</h2> <br>";
} else {
    echo "Eres joven <br>";
}
*/

//tipos de datos
var_dump($isDev);
echo gettype($isDev);

//constantes, siempre en una carpeta aparte
define('LOGO_URL', 'https://example.com/logo.png');

const NOMBRE = 'Diegooo';

//ternarias
$output = "Hola $name, con una edad de $age";
$outputAge = $isOld ? "<br>Eres viejo" : "<br>Eres joven";

//match expressions, es como el switch pero más potente
$outputAge = match (true) {
    $age < 2 => "<br>Eres un bebe, $name",
    $age < 10 => "<br>Eres un niño, $name",
    $age < 18 => "<br>Eres un joven, $name",
    $age == 18 => "<br>Eres mayor de edad, $name",
    $age < 40 => "<br>Eres un adulto joven, $name",
    $age < 0 => "<br>Eres un adulto viejo, $name",
    default => "<br>Hueles más a madera que fruta, $name",
};

//arrays
$bestLanguages = ["JavaScript", "Python", "PHP"];
$bestLanguages[] = "Go"; //agregar un elemento al final del array

$person = [
    "name" => "Diego",
    "age" => 23,
    "isDev" => true,
    "languages" => ["JavaScript", "Python", "PHP"]
];


// el elseif en el codigo <?php se mantiene junto o error
?>

<h2><?= $person["name"] ?></h2>

<h3>El mejor Lenguaje es <?= $bestLanguages[2] ?></h3>

<ul>
    <?php foreach ($bestLanguages as $key => $language): ?>
        <li><?= $key . " " . $language; ?></li>
    <?php endforeach; ?>
</ul>
<h2>
    <?= $outputAge; ?> <br>
</h2>

<?php if ($isOld): ?>
    <h2>Eres viejo</h2> <br>
<?php elseif ($isDev): ?>
    <h2>No eres viejo, pero eres dev. :b</h2> <br>
<?php else: ?>
    <h2>Eres joven</h2> <br>
<?php endif; ?>

<h1>
    <?php echo "Hola $name, tu edad es $age"; ?>
    <?php echo "Hola " . NOMBRE . ", tu edad es $age"; ?>
</h1>


<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    h1 {
        color: blue;
    }
</style>