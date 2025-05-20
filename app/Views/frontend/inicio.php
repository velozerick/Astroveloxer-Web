<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astroveloxer</title>
    <link rel="stylesheet" href="<?= base_url('css/Astroveloxer.css') ?>">
</head>
<body>
    <div class="stars"></div>
   



    <!-- Barra de Navegación -->
    <header class="header">
        <nav class="navbar">
            <button class="burger" onclick="toggleMenu()" aria-label="Menú">
                <span></span><span></span><span></span>
            </button>
            <ul class="nav">
                <li><a href="<?= base_url('/inicio') ?>">ASTROVELOXER</a></li>
                <li><a href="<?= base_url('/galeria') ?>">Galería</a></li>
                <li><a href="<?= base_url('/foro') ?>">Foro</a></li>
                <li><a href="<?= base_url('/calendario') ?>">Calendario</a></li>
                <li><a href="<?= base_url('/logout') ?>">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>


    <main>
<!-- HOME SECTION -->
<section class="home" id="home">
    <div class="content">
        <div class="welcome-banner-xl">
           
            <h1 class="welcome-greeting">¡Bienvenid@, <?= session('nombre') ?>!</h1>
            <p class="welcome-message">Exploremos el universo juntos</p>
        </div>
    </div>
</section>


    <?php if (isset($frase)): ?>
<section class="frase-del-dia">
    <div class="frase-contenedor">
        <h2 class="frase-titulo">✨ Frase del Día</h2>
        <blockquote class="frase-cita">
            “<?= esc($frase['contenido']) ?>”
        </blockquote>
    </div>
</section>
<?php endif; ?>




        <!-- CURSOS SECTION -->
        <section class="como-iniciar" id="como-iniciar">
            <h2 class="heading"><span>Cómo</span> <span>Iniciar</span> en Astrofotografía</h2>

            <div class="card-grid">
                <a class="card" href="<?= base_url('/curso-celular') ?>" aria-label="Curso de astrofotografía con celular">
                    <div class="card__background" style="background-image: url('<?= base_url('images/cel.jpg') ?>')"></div>
                    <div class="card__content">
                        <p class="card__category">Celular</p>
                        <h3 class="card__heading">Astrofotografía con Celular</h3>
                    </div>
                </a>
                <a class="card" href="<?= base_url('/curso-telescopio') ?>" aria-label="Curso de astrofotografía con telescopio">
                    <div class="card__background" style="background-image: url('<?= base_url('images/secret.jpg') ?>')"></div>
                    <div class="card__content">
                        <p class="card__category">Telescopio</p>
                        <h3 class="card__heading">Astrofotografía con Telescopio</h3>
                    </div>
                </a>
            </div>
        </section>

        <!-- ÚLTIMAS IMÁGENES -->
        <section class="ultimas-imagenes">
            <h2>Últimas imágenes de Astroveloxer</h2>
            <div class="image-gallery">
                <figure>
                    <img src="<?= base_url('images/LAGOON.jpg') ?>" alt="Galaxia del Molinete" loading="lazy">
                    <figcaption>Nebulosa de la Laguna</figcaption>
                </figure>
                <figure>
                    <img src="<?= base_url('images/jup11.jpg') ?>" alt="Nebulosa de Orión" loading="lazy">
                    <figcaption>Jupiter</figcaption>
                </figure>
                <figure>
                    <img src="<?= base_url('images/sunfull_ASTROVELOXER.jpg') ?>" alt="El Sol" loading="lazy">
                    <figcaption>El Sol</figcaption>
                </figure>
            </div>
        </section>

        <!-- WIDGET CLIMA Y FASE LUNAR -->
        <section class="clima-luna">
            <h2>Condiciones actuales</h2>
            <div id="widget-clima" aria-live="polite">
                <!-- Widget de clima -->
            </div>
            <div id="widget-luna" aria-live="polite">
                <!-- Widget de fase lunar -->
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="social-links">
            <a href="https://www.instagram.com/Astroveloxer" target="_blank" rel="noopener noreferrer" class="social-link">
                <img src="<?= base_url('images/instagram-logo.webp') ?>" alt="Instagram" loading="lazy">
                <span>Astroveloxer</span>
            </a>
        </div>
        <div class="footer-info">
            <p>&copy; 2025 Astroveloxer. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="<?= base_url('js/script.js') ?>"></script>
</body>
</html>