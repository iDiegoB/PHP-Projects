<?php
$nombre = "Diego Barra";
$titulo = "Estudiante de Ingeniería Informática";
$descripcion = "Desarrollo soluciones digitales modernas, limpias y escalables con foco en software, web y videojuegos.";
$email = "diegobarrabarrera@gmail.com";
$telefono = "+56 9 7688 1742";
$cv = "cv/Diego_Barra_CV.pdf";
$foto = "img/perfil.jpg";
$proyectos = [
    [
        "titulo" => "Sistema de Ventas – Minimarket",
        "descripcion" => "Sistema de ventas, inventario y facturación desarrollado en PHP.",
        "imagen" => "img/proyecto1.jpg"
    ],
    [
        "titulo" => "Juego 2D en Unity",
        "descripcion" => "Videojuego 2D con animaciones, puntaje y narrativa.",
        "imagen" => "img/proyecto2.jpg"
    ],
    [
        "titulo" => "App Seguridad Condominio",
        "descripcion" => "Aplicación para monitoreo y control de accesos.",
        "imagen" => "img/proyecto3.jpg"
    ]
];

$habilidades = [
    "PHP",
    "JavaScript",
    "HTML",
    "CSS",
    "Bootstrap",
    "Python",
    "Django",
    "MySQL",
    "Unity (C#)",
    "Git"
];
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <!-- SEO -->
    <title><?= $nombre ?> | Portafolio</title>
    <meta name="description" content="<?= $descripcion ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= $nombre ?> – Portafolio">
    <meta property="og:description" content="<?= $descripcion ?>">
    <meta property="og:type" content="website">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth;
        }

        :root {
            --c1: #03045E;
            --c2: #023E8A;
            --c3: #0077B6;
            --c4: #0096C7;
            --c5: #00B4D8;
            --c6: #48CAE4;
            --c7: #90E0EF;
            --c8: #ADE8F4;
            --c9: #CAF0F8;

            --bg: var(--c9);
            --text: var(--c1);
            --card: #fff;
        }

        body.dark {
            --bg: #0b132b;
            --text: #eaeaea;
            --card: #1c2541;
        }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: system-ui, -apple-system, BlinkMacSystemFont;
            font-size: 1.15rem;
            transition: background .3s, color .3s;
        }

        section {
            padding: 100px 0;
        }

        .container-narrow {
            max-width: 980px;
            margin: auto;
        }

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, var(--c1), var(--c3));
            color: white;
        }

        .hero h1 {
            font-size: 3.2rem;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.3rem;
        }

        .btn-main {
            position: relative;
            background: linear-gradient(135deg, #00E5FF, #48CAE4);
            color: #03045E;
            border: 1px solid rgba(255, 255, 255, .4);
            padding: 14px 30px;
            border-radius: 40px;
            font-weight: 700;
            letter-spacing: .5px;
            box-shadow:
                0 10px 30px rgba(0, 229, 255, .35),
                inset 0 0 0 rgba(255, 255, 255, 0);
            transition: all .4s cubic-bezier(.22, .61, .36, 1);
            backdrop-filter: blur(6px);
        }

        .btn-main:hover {
            transform: translateY(-4px) scale(1.03);
            box-shadow:
                0 0 35px rgba(0, 229, 255, .9),
                0 0 70px rgba(72, 202, 228, .6);
            color: #03045E;
        }


        .card {
            background: var(--card);
            border-radius: 20px;
            border: none;
            padding: 30px;
            transition: all .4s cubic-bezier(.22, .61, .36, 1);
        }

        .card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 30px 60px rgba(0, 0, 0, .15);
        }

        .badge-skill {
            background: var(--c7);
            color: var(--c1);
            margin: 6px;
            padding: 10px 14px;
            font-size: .95rem;
            border-radius: 20px;
        }

        .fade {
            opacity: 0;
            transform: translateY(40px);
            transition: all .8s cubic-bezier(.22, .61, .36, 1);
        }

        .fade.show {
            opacity: 1;
            transform: translateY(0);
        }

        .profile-img {
            width: 220px;
            height: 220px;
            object-fit: cover;
            border-radius: 50%;
            border: 6px solid var(--c6);
        }

        .toggle-dark {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            background: var(--card);
            color: var(--text);
            border-radius: 50px;
            padding: 10px 18px;
            cursor: pointer;
            font-size: .9rem;
            font-weight: 600;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .25);
            transition: all .3s ease;
        }

        .toggle-dark:hover {
            transform: scale(1.05);
        }

        .footer {
            background: var(--c1);
            color: white;
            padding: 40px 0;
            font-size: .9rem;
        }

        /* PROYECTOS GRID */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .project-card {
            background: var(--card);
            border-radius: 24px;
            overflow: hidden;
            transition: all .4s cubic-bezier(.22, .61, .36, 1);
        }

        .project-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 30px 60px rgba(0, 0, 0, .15);
        }

        .project-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .project-content {
            padding: 24px;
        }

        .project-content h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .project-content p {
            font-size: 1rem;
            opacity: .85;
        }

        /* ===== ANIME STYLE ===== */

        .hero {
            background: linear-gradient(135deg, #03045E, #0077B6, #00B4D8);
            position: relative;
            overflow: hidden;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 20% 20%, rgba(72, 202, 228, .25), transparent 40%),
                radial-gradient(circle at 80% 60%, rgba(0, 180, 216, .25), transparent 40%);
            pointer-events: none;
        }

        /* TITULOS */
        h1,
        h2,
        h3 {
            letter-spacing: .5px;
        }

        /* BOTONES */
        .btn-main {
            background: linear-gradient(135deg, #00B4D8, #48CAE4);
            color: #03045E;
            box-shadow: 0 0 0 rgba(72, 202, 228, 0);
            transition: all .4s cubic-bezier(.22, .61, .36, 1);
        }

        .btn-main:hover {
            box-shadow: 0 0 25px rgba(72, 202, 228, .7);
            transform: translateY(-2px);
        }

        /* PROFILE */
        .profile-img {
            border-radius: 24px;
            border: 3px solid #48CAE4;
            box-shadow:
                0 0 0 4px rgba(72, 202, 228, .2),
                0 20px 40px rgba(0, 0, 0, .25);
        }

        /* PROJECTS */
        .project-card {
            background: linear-gradient(180deg, #ADE8F4, #CAF0F8);
            border: 1px solid rgba(0, 180, 216, .4);
            box-shadow: 0 20px 40px rgba(3, 4, 94, .15);
        }

        body.dark .project-card {
            background: linear-gradient(180deg, #1c2541, #0b132b);
            border-color: rgba(72, 202, 228, .4);
        }

        .project-card::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 24px;
            box-shadow: 0 0 0 rgba(72, 202, 228, 0);
            transition: .4s;
        }

        .project-card:hover::before {
            box-shadow: 0 0 30px rgba(72, 202, 228, .6);
        }

        /* IMAGE PANEL */
        .project-card img {
            border-bottom: 1px solid rgba(0, 180, 216, .4);
            filter: saturate(1.1) contrast(1.05);
        }

        /* BADGES */
        .badge-skill {
            background: linear-gradient(135deg, #90E0EF, #48CAE4);
            color: #03045E;
            box-shadow: 0 5px 15px rgba(72, 202, 228, .4);
        }

        /* DARK MODE TWEAKS */
        body.dark {
            background: radial-gradient(circle at top, #03045E, #0b132b);
        }

        body.dark h1,
        body.dark h2 {
            color: #CAF0F8;
        }

        /* Fondos por sección */
        section[data-bg] {
            transition: background-color .8s ease;
        }

        .bg-hero {
            background: linear-gradient(135deg, #03045E, #0077B6, #00B4D8);
            color: white;
        }

        .bg-about {
            background: #CAF0F8;
        }

        .bg-skills {
            background: #ADE8F4;
        }

        .bg-projects {
            background: #90E0EF;
        }

        .bg-contact {
            background: #48CAE4;
        }

        /* Dark mode */
        body.dark .bg-about {
            background: #0b132b;
        }

        body.dark .bg-skills {
            background: #1c2541;
        }

        body.dark .bg-projects {
            background: #03045E;
        }

        body.dark .bg-contact {
            background: #023E8A;
        }
    </style>

</head>

<body>

    <div class="toggle-dark" onclick="toggleDark()">🌙 Modo</div>

    <!-- HERO -->
    <section class="hero bg-hero text-center" data-bg>
        <div class="container-narrow">
            <h1><?= $nombre ?></h1>
            <p class="mt-3"><?= $titulo ?></p>
            <p class="mt-2"><?= $descripcion ?></p>

            <div class="mt-4">
                <a href="#sobre" class="btn btn-main me-3">Sobre mí</a>
                <a href="#habilidades" class="btn btn-main me-3">Habilidades</a>
                <a href="#proyectos" class="btn btn-main btn-cta me-3">Proyectos</a>
                <a href="#contacto" class="btn btn-main me-3">Contacto</a>
                <a href="<?= $cv ?>" class="btn btn-outline-light" download>Descargar CV</a>
            </div>
        </div>
    </section>

    <!-- SOBRE MI -->
    <section id="sobre" class="fade bg-about" data-bg>
        <div class="container-narrow">
            <div class="row align-items-center g-5">
                <div class="col-md-5 text-center">
                    <img src="<?= $foto ?>" alt="Foto de <?= $nombre ?>" class="profile-img">
                </div>
                <div class="col-md-7">
                    <h2>Sobre mí</h2>
                    <p class="mt-3">
                        Soy estudiante de Ingeniería en Computación con enfoque en desarrollo web,
                        software y videojuegos. Me interesa construir soluciones bien diseñadas,
                        eficientes y fáciles de mantener.
                    </p>
                    <p>
                        He trabajado con PHP, Python, Django, Unity y bases de datos,
                        siempre buscando buenas prácticas, código limpio y una experiencia
                        clara para el usuario.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- HABILIDADES -->
    <section id="habilidades" class="fade bg-skills" data-bg>
        <div class="container-narrow text-center">
            <h2>Habilidades</h2>
            <div class="mt-4">
                <?php foreach ($habilidades as $h): ?>
                    <span class="badge-skill"><?= $h ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- PROYECTOS -->
    <section id="proyectos" class="fade bg-projects" data-bg>
        <div class="container-narrow">
            <h2 class="text-center">Proyectos</h2>

            <div class="projects-grid">
                <?php foreach ($proyectos as $p): ?>
                    <div class="project-card">
                        <img src="<?= $p['imagen'] ?>" alt="<?= $p['titulo'] ?>">
                        <div class="project-content">
                            <h3><?= $p['titulo'] ?></h3>
                            <p><?= $p['descripcion'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CONTACTO -->
    <section id="contacto" class="fade text-center bg-contact" data-bg>
        <div class="container-narrow">
            <h2>Contacto</h2>
            <p class="mt-3"><?= $email ?></p>
            <p><?= $telefono ?></p>
        </div>
    </section>

    <footer class="text-center">
        © <?= date("Y") ?> <?= $nombre ?> · Portafolio Profesional
    </footer>

    <script>
        /* Scroll Animations (Apple/Vercel style) */
        const items = document.querySelectorAll('.fade');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) e.target.classList.add('show');
            });
        }, {
            threshold: .15
        });
        items.forEach(i => observer.observe(i));

        /* Dark Mode */
        function toggleDark() {
            document.body.classList.toggle('dark');
            localStorage.setItem('dark', document.body.classList.contains('dark'));
        }

        if (localStorage.getItem('dark') === 'true') {
            document.body.classList.add('dark');
        }
        /* Background transition per section */
        const sections = document.querySelectorAll('section[data-bg]');

        const bgObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active-bg');
                }
            });
        }, {
            threshold: 0.3
        });

        sections.forEach(s => bgObserver.observe(s));
    </script>

</body>

</html>