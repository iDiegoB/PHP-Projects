<?php
$nombre = "Diego Maximiliano Barra Barrera";
$titulo = "Estudiante de Ingeniería Informática";
$descripcion = "Desarrollo soluciones digitales modernas, limpias y escalables con foco en software, web y videojuegos.";
$email = "diego@gmail.com";
$telefono = "+56 ";
$cv = "cv/CV_Diego_Barra.pdf";
$foto = "img/perfil.jpeg";
$proyectos = [
    [
        "titulo" => "Proyecto-de-integracion",
        "descripcion" => "Sistema de ventas, inventario y facturación desarrollado en PHP.",
        "imagen" => "img/xd.png"
    ],
    [
        "titulo" => "Juego 2D en Unity",
        "descripcion" => "Videojuego 2D con animaciones, puntaje y narrativa.",
        "imagen" => "img/xd.png"
    ],
    [
        "titulo" => "App Seguridad Condominio",
        "descripcion" => "Aplicación para monitoreo y control de accesos.",
        "imagen" => "img/xd.png"
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
            /* Base */
            --bg: #ffffff;
            --text: #0f0f14;
            --card: #f6f7f9;
            --border: rgba(0, 0, 0, .08);

            /* Pastel masculino */
            --accent: #8faecb;
            --accent-soft: #cfd6e0;
            --accent-strong: #b8c2d6;

            /* Sombras */
            --shadow-sm: 0 10px 25px rgba(0, 0, 0, .08);
            --shadow-md: 0 25px 60px rgba(0, 0, 0, .12);
            --shadow-lg: 0 40px 90px rgba(0, 0, 0, .18);
        }

        body.dark {
            --bg: #0f0f14;
            --text: #e8e9ee;
            --card: #1a1b22;
            --border: rgba(255, 255, 255, .08);

            --accent: #9faec4;
            --accent-soft: #2a2d3a;
            --accent-strong: #3b3f52;

            --shadow-sm: 0 10px 25px rgba(0, 0, 0, .6);
            --shadow-md: 0 25px 60px rgba(0, 0, 0, .7);
            --shadow-lg: 0 40px 90px rgba(0, 0, 0, .85);
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
            background: linear-gradient(135deg,
                    var(--accent-soft),
                    var(--bg));
            transition: background .6s ease;
        }

        body.dark .hero {
            background: linear-gradient(135deg,
                    #14151b,
                    #0f0f14);
        }


        .hero h1 {
            font-size: 3.2rem;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.3rem;
        }


        .card,
        .project-card {
            background: var(--card);
            border-radius: 22px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, .08);
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
            transition: all .3s ease;
            border: 1px solid var(--border);
            box-shadow: var(--shadow-sm);
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
            background: linear-gradient(135deg, #ffffff, #ffffff, #ffffff);
            position: relative;
            overflow: hidden;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 20% 20%, rgba(253, 253, 253, 0.25), transparent 40%),
                radial-gradient(circle at 80% 60%, rgba(255, 255, 255, 0.25), transparent 40%);
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
            background: linear-gradient(135deg, var(--accent-soft), var(--accent-strong));
            color: var(--text);
            border: none;
            padding: 14px 34px;
            border-radius: 999px;
            font-weight: 700;
            letter-spacing: .3px;
            box-shadow: var(--shadow-sm);
            transition: all .35s cubic-bezier(.22, .61, .36, 1);
        }

        .btn-main:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-md);
        }


        /* PROFILE */
        .profile-img {
            border-radius: 24px;
            border: 3px solid #ffffff;
            box-shadow:
                0 0 0 4px rgb(255, 255, 255),
                0 10px 20px rgb(255, 255, 255);
        }

        /* PROJECTS */
        .project-card {
            background: linear-gradient(180deg, #ffffff, #000000);
            box-shadow: 0 10px 20px rgb(0, 0, 0);
            color: #ffffff;
        }

        .project-card:hover {
            transition: .1s;
            filter: brightness(1.05);
        }

        body.dark .project-card {
            background: linear-gradient(180deg, #f8f8f8, #0000005d);
            border-color: rgb(255, 255, 255);
        }

        .project-card::before {
            transition: .1s;
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgb(255, 255, 255);
            transition: .4s;
        }

        .project-card:hover::before {

            box-shadow: 0 20px 40px rgb(255, 255, 255);
        }

        /* IMAGE PANEL */
        .project-card img {
            border-bottom: 1px solid rgba(255, 255, 255, 0.4);
            filter: saturate(1.1) contrast(1.05);
        }

        /* BADGES */
        .badge-skill {
            background: linear-gradient(135deg, #929292, #000000);
            color: #ffffff;
            font-weight: 700;
            box-shadow: 0 5px 15px var(--accent);
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
            background: linear-gradient(135deg, #0f0f14, #1a1b22);
            color: white;
        }

        .bg-about {
            background: var(--p1);
        }

        .bg-skills {
            background: var(--p2);
        }

        .bg-projects {
            background: var(--p3);
        }

        .bg-contact {
            background: var(--p4);
        }

        /* Dark mode */
        body.dark .bg-about {
            background: #14151b;
        }

        body.dark .bg-skills {
            background: #1a1b22;
        }

        body.dark .bg-projects {
            background: #20222b;
        }

        body.dark .bg-contact {
            background: #262833;
        }


        /* Animación individual de proyectos */
        .project-card {
            opacity: 0;
            transform: translateY(60px) scale(0.96);
            transition: all .8s cubic-bezier(.22, .61, .36, 1);
        }

        .project-card.show {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        /* Animación de secciones */
        section {
            opacity: 0;
            transform: translateY(60px);
            transition:
                opacity .9s cubic-bezier(.22, .61, .36, 1),
                transform .9s cubic-bezier(.22, .61, .36, 1);
        }

        /* Cuando aparece */
        section.show {
            opacity: 1;
            transform: translateY(0);
        }

        .project-card {
            opacity: 0;
            transform: translateY(40px) scale(.97);
            transition:
                opacity .8s cubic-bezier(.22, .61, .36, 1),
                transform .8s cubic-bezier(.22, .61, .36, 1);
        }

        .project-card.show {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        /* CONTACTO */
        .contact-card {
            background: var(--card);
            padding: 40px;
            border-radius: 28px;
            max-width: 520px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, .12);
            transition: transform .4s cubic-bezier(.22, .61, .36, 1);
        }

        .contact-card:hover {
            transform: translateY(-6px);
        }

        .contact-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 14px;
            font-size: 1.1rem;
            margin: 16px 0;
        }

        .contact-item a {
            color: var(--text);
            text-decoration: none;
            font-weight: 600;
        }

        .contact-item a:hover {
            text-decoration: underline;
        }

        /* =========================
   ABOUT – VISUAL UPGRADE
========================= */
        .about-card {
            background: var(--card);
            border-radius: 36px;
            padding: 60px 50px;
            box-shadow: 0 40px 90px rgba(0, 0, 0, .12);
        }

        /* Imagen grande y protagonista */
        .about-photo {
            position: relative;
            border-radius: 32px;
            overflow: hidden;
            max-width: 420px;
            margin: auto;
            box-shadow: 0 30px 70px rgba(0, 0, 0, .25);
        }

        .about-photo img {
            width: 100%;
            height: 520px;
            object-fit: cover;
            transition: transform .6s ease;
        }

        .about-photo:hover img {
            transform: scale(1.05);
        }

        /* Texto */
        .about-card .lead {
            font-size: 1.25rem;
            font-weight: 500;
        }

        /* Tags */
        .about-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .about-tags span {
            background: linear-gradient(135deg, #cfd6e0, #b8c2d6);
            color: #0f0f14;
            padding: 10px 18px;
            border-radius: 999px;
            font-size: .9rem;
            font-weight: 700;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .12);
            transition: transform .3s ease;
        }

        .about-tags span:hover {
            transform: translateY(-4px);
        }

        /* Dark mode */
        body.dark .about-card {
            background: #1a1b22;
        }

        body.dark .about-tags span {
            background: linear-gradient(135deg, #2a2d3a, #3b3f52);
            color: #e8e9ee;
        }

        /* =========================
   PROJECTS – V2 UPGRADE
========================= */

        .project-card-v2 {
            position: relative;
            background: var(--card);
            border-radius: 32px;
            overflow: hidden;
            box-shadow: 0 30px 70px rgba(0, 0, 0, .18);
            transition: transform .5s cubic-bezier(.22, .61, .36, 1),
                box-shadow .5s cubic-bezier(.22, .61, .36, 1);
            opacity: 0;
            transform: translateY(60px) scale(.96);
        }

        .project-card-v2.show {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        .project-card-v2:hover {
            transform: translateY(-12px) scale(1.03);
            box-shadow: 0 50px 120px rgba(0, 0, 0, .35);
        }

        /* Imagen */
        .project-image {
            position: relative;
            height: 220px;
            overflow: hidden;
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .6s ease;
        }

        .project-card-v2:hover img {
            transform: scale(1.08);
        }

        /* Overlay suave */
        .project-image::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom,
                    rgba(0, 0, 0, .0),
                    rgba(0, 0, 0, .45));
        }

        /* Info */
        .project-info {
            padding: 28px 26px 32px;
        }

        .project-info h3 {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .project-info p {
            font-size: 1rem;
            opacity: .85;
            line-height: 1.5;
        }

        /* CTA */
        .project-actions {
            margin-top: 18px;
        }

        /* Dark mode */
        body.dark .project-card-v2 {
            background: #1a1b22;
        }

        /* =========================
   SKILLS – PREMIUM GRID
========================= */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 26px;
        }

        /* Card */
        .skill-card {
            background: var(--card);
            border-radius: 26px;
            padding: 34px 20px;
            box-shadow: 0 20px 45px rgba(0, 0, 0, .15);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 14px;
            font-weight: 700;
            opacity: 0;
            transform: translateY(40px) scale(.96);
            transition:
                transform .5s cubic-bezier(.22, .61, .36, 1),
                box-shadow .4s ease,
                opacity .5s ease;
        }

        .skill-card.show {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        .skill-card:hover {
            transform: translateY(-8px) scale(1.06);
            box-shadow: 0 35px 80px rgba(0, 0, 0, .25);
        }

        /* Icono */
        .skill-icon {
            font-size: 2.4rem;
        }

        /* Dark mode */
        body.dark .skill-card {
            background: #1a1b22;
        }

        .card,
        .skill-card,
        .project-card-v2,
        .contact-card,
        .about-card {
            background: var(--card);
            border-radius: 28px;
            border: 1px solid var(--border);
            box-shadow: var(--shadow-md);
            transition: all .45s cubic-bezier(.22, .61, .36, 1);
        }

        .card:hover,
        .skill-card:hover,
        .project-card-v2:hover,
        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .project-card-v2 {
            background: var(--card);
            color: var(--text);
        }

        /* BOTÓN CV – VISIBLE EN LIGHT Y DARK */
        .btn-cv {
            background: var(--card);
            color: var(--text);
            border: 2px solid var(--accent);
            padding: 14px 36px;
            border-radius: 999px;
            font-weight: 700;
            letter-spacing: .3px;
            box-shadow: var(--shadow-sm);
            transition: all .35s cubic-bezier(.22, .61, .36, 1);
        }

        /* Hover */
        .btn-cv:hover {
            background: var(--accent);
            color: #0f0f14;
            transform: translateY(-4px);
            box-shadow: var(--shadow-md);
        }

        /* Dark mode */
        body.dark .btn-cv {
            background: #1a1b22;
            color: var(--text);
            border-color: var(--accent);
        }

        body.dark .btn-cv:hover {
            background: var(--accent);
            color: #0f0f14;
        }

        /* =========================
   SECTION BACKGROUNDS – LIGHT
========================= */
        .bg-hero {
            background: linear-gradient(135deg,
                    var(--accent-soft),
                    #ffffff);
        }

        .bg-about {
            background: #f1f3f7;
        }

        .bg-skills {
            background: #e6eaf2;
        }

        .bg-projects {
            background: #dde3ee;
        }

        .bg-contact {
            background: #d4dbe8;
        }

        /* HERO – COLOR DE TEXTO CORRECTO */
        .hero {
            color: var(--text);
        }

        /* Dark mode */
        body.dark .hero {
            color: #ffffff;
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
                <br><br><br>
                <a href="<?= $cv ?>" class="btn btn-cv" download>Descargar CV</a>

            </div>
        </div>
    </section>

    <!-- SOBRE MI -->
    <section id="sobre" class="bg-about" data-bg>
        <div class="container-narrow">
            <div class="about-card row align-items-center g-5">

                <!-- IMAGEN GRANDE -->
                <div class="col-md-5 text-center">
                    <div class="about-photo">
                        <img src="<?= $foto ?>" alt="Foto de <?= $nombre ?>">
                    </div>
                </div>

                <!-- CONTENIDO -->
                <div class="col-md-7">
                    <h2 class="mb-3">Sobre mí</h2>

                    <p class="lead">
                        Estudiante de Ingeniería Informática con enfoque en desarrollo de
                        <strong>software</strong>, <strong>aplicaciones web</strong> y
                        <strong>videojuegos</strong>.
                    </p>

                    <p class="opacity-85">
                        Me gusta crear soluciones modernas, bien estructuradas y fáciles
                        de mantener, aplicando buenas prácticas y una experiencia clara
                        para el usuario.
                    </p>

                    <p class="opacity-85">
                        He trabajado con tecnologías como <strong>PHP</strong>,
                        <strong>Python</strong>, <strong>Django</strong>,
                        <strong>MySQL</strong> y <strong>Unity</strong>,
                        integrando frontend y backend en proyectos reales.
                    </p>

                    <!-- HIGHLIGHTS -->
                    <div class="about-tags mt-4">
                        <span>💻 Desarrollo Web</span>
                        <span>🎮 Videojuegos</span>
                        <span>⚙️ Backend & APIs</span>
                        <span>🧠 Código limpio</span>
                    </div>

                    <div class="mt-4">
                        <a href="#proyectos" class="btn btn-main me-3">
                            Ver proyectos
                        </a>
                        <a href="<?= $cv ?>" class="btn btn-cv" download>Descargar CV</a>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- HABILIDADES -->
    <section id="habilidades" class="bg-skills" data-bg>
        <div class="container-narrow text-center">
            <h2 class="mb-3">Habilidades</h2>
            <p class="opacity-75 mb-5">
                Tecnologías y herramientas que utilizo en mis proyectos
            </p>

            <div class="skills-grid">
                <?php foreach ($habilidades as $h): ?>
                    <div class="skill-card">
                        <div class="skill-icon">
                            <?php
                            $icons = [
                                "PHP" => "🐘",
                                "JavaScript" => "🟨",
                                "HTML" => "🌐",
                                "CSS" => "🎨",
                                "Bootstrap" => "🅱️",
                                "Python" => "🐍",
                                "Django" => "🌱",
                                "MySQL" => "🗄️",
                                "Unity (C#)" => "🎮",
                                "Git" => "🔧"
                            ];
                            echo $icons[$h] ?? "⚙️";
                            ?>
                        </div>
                        <span><?= $h ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- PROYECTOS -->
    <section id="proyectos" class="bg-projects" data-bg>
        <div class="container-narrow">
            <h2 class="text-center mb-3">Proyectos</h2>
            <p class="text-center opacity-75">
                Algunos de los proyectos en los que he trabajado, aplicando desarrollo web,
                software y videojuegos.
            </p>

            <div class="projects-grid mt-5">
                <?php foreach ($proyectos as $p): ?>
                    <div class="project-card-v2">
                        <div class="project-image">
                            <img src="<?= $p['imagen'] ?>" alt="<?= $p['titulo'] ?>">
                        </div>

                        <div class="project-info">
                            <h3><?= $p['titulo'] ?></h3>
                            <p><?= $p['descripcion'] ?></p>

                            <div class="project-actions">
                                <a href="#" class="btn btn-main btn-sm">
                                    Ver proyecto
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- CONTACTO -->
    <section id="contacto" class="bg-contact" data-bg>
        <div class="container-narrow text-center">
            <h2>Contacto</h2>
            <p class="mt-2 opacity-75">
                ¿Tienes una propuesta, práctica o proyecto en mente?
            </p>

            <div class="contact-card mt-5 mx-auto">
                <div class="contact-item">
                    <span>📧</span>
                    <a href="mailto:<?= $email ?>"><?= $email ?></a>
                </div>

                <div class="contact-item">
                    <span>📱</span>
                    <a href="https://wa.me/56976881742" target="_blank">
                        <?= $telefono ?>
                    </a>
                </div>

                <div class="mt-4">
                    <a href="mailto:<?= $email ?>" class="btn btn-main me-2">
                        Enviar correo
                    </a>
                </div>
            </div>
        </div>
    </section>


    <footer class="text-center">
        © <?= date("Y") ?> <?= $nombre ?> · Portafolio Profesional
    </footer>

    <script>
        /* =========================
       DARK MODE
    ========================= */
        function toggleDark() {
            document.body.classList.toggle('dark');
            localStorage.setItem('dark', document.body.classList.contains('dark'));
        }

        if (localStorage.getItem('dark') === 'true') {
            document.body.classList.add('dark');
        }

        /* =========================
           APARICIÓN DE SECTIONS
           (Apple / Vercel style)
        ========================= */
        const allSections = document.querySelectorAll('section');

        const sectionObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    sectionObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15
        });

        allSections.forEach(section => {
            if (section.classList.contains('hero')) {
                section.classList.add('show'); // Hero visible al cargar
            } else {
                sectionObserver.observe(section);
            }
        });

        /* =========================
           FONDOS POR SECCIÓN
           (transición suave)
        ========================= */
        const bgSections = document.querySelectorAll('section[data-bg]');

        const bgObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active-bg');
                }
            });
        }, {
            threshold: 0.3
        });

        bgSections.forEach(s => bgObserver.observe(s));

        /* =========================
           PROYECTOS – STAGGER FIX
           (esto estaba roto antes)
        ========================= */
        const projectCards = document.querySelectorAll('.project-card');

        const projectObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const cards = Array.from(projectCards);
                    const index = cards.indexOf(entry.target);

                    entry.target.style.transitionDelay = `${index * 120}ms`;
                    entry.target.classList.add('show');

                    projectObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2
        });

        projectCards.forEach(card => projectObserver.observe(card));
        /* =========================
   PROJECTS V2 – STAGGER
========================= */
        const projectV2 = document.querySelectorAll('.project-card-v2');

        const projectV2Observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    projectV2.forEach((card, i) => {
                        setTimeout(() => {
                            card.classList.add('show');
                        }, i * 140);
                    });
                    projectV2Observer.disconnect();
                }
            });
        }, {
            threshold: 0.25
        });

        projectV2Observer.observe(document.querySelector('#proyectos'));
        /* =========================
   SKILLS – STAGGER
========================= */
        const skillCards = document.querySelectorAll('.skill-card');

        const skillsObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    skillCards.forEach((card, i) => {
                        setTimeout(() => {
                            card.classList.add('show');
                        }, i * 90);
                    });
                    skillsObserver.disconnect();
                }
            });
        }, {
            threshold: 0.3
        });

        skillsObserver.observe(document.querySelector('#habilidades'));
    </script>


</body>

</html>