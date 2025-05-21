<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería | Astroveloxer</title>
    <link rel="stylesheet" href="<?= base_url('css/galeria.css') ?>">
    
</head>
<body>

    <!-- Fondo de estrellas -->
    <div class="stars"></div>

    <!-- Banner de bienvenida -->
    <div class="welcome-banner">
        <div class="welcome-content">
            <span class="welcome-icon">🛰️</span>
            <div class="welcome-text">
                <span class="welcome-greeting">¡Hola <?= session('nombre') ?>!</span>
                <span class="welcome-message">Tu mirada al cosmos comienza aquí</span>
            </div>
        </div>
    </div>

    <!-- Barra de navegación -->
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

    <!-- Sección de bienvenida -->
    <section class="home" id="home">
        <div class="content">
            <h1 class="main-heading">Explora y comparte el cosmos</h1>
            <p>Sumérgete en la belleza del universo a través de nuestra galería astronómica y comparte tus propias capturas.</p>
        </div>
    </section>

    <!-- Galería Astroveloxer -->
    <section class="astrofotografia">
        <h2 class="heading">Galería de Astroveloxer</h2>

        <div class="filter-buttons">
            <button data-filter="all" class="active">Todo</button>
            <button data-filter="nebulosa">Nebulosas</button>
            <button data-filter="planeta">Planetas</button>
            <button data-filter="galaxia">Galaxias</button>
        </div>

        <div class="image-gallery">
            <!-- Aquí irán tus imágenes Astroveloxer (puedes iterar en PHP) -->
            <!-- Ejemplo: -->
            <div class="image-item galaxia">
                <img src="<?= base_url('public/images/M101_ASTROVELOXER.jpg') ?>" alt="Galaxia del Molinete">
                <p>Galaxia del Molinete</p>
            </div>
        </div>
    </section>

    <!-- Galería Comunidad -->
    <section class="publish-section" id="publica-tus-fotos">
        <div class="publish-content">
            <h2 class="heading">Galería de la Comunidad</h2>
            <p>¡Comparte tus propias imágenes del cielo estrellado con toda la comunidad!</p>

            <form id="upload-form" action="<?= base_url('/galeria/subir') ?>" method="post" enctype="multipart/form-data">
                <input type="text" name="username" placeholder="Tu nombre" required>
                <input type="file" name="astrofoto" required>
                <textarea name="description" placeholder="Describe tu foto (máximo 300 caracteres)" required maxlength="300"></textarea>
                <button type="submit">Subir Foto</button>
            </form>

            <div class="forum-gallery">
                <!-- Aquí se cargarán dinámicamente las fotos subidas -->
                <!-- Ejemplo: -->
                <div class="forum-item">
                    <img src="<?= base_url('public/images/user_demo.jpg') ?>" alt="Foto comunidad">
                    <p>Nebulosa de Orión — <em>por Erick</em></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox -->
    <div id="lightbox" class="lightbox" onclick="closeLightbox()">
        <div class="lightbox-content" onclick="event.stopPropagation()">
            <img id="lightbox-image" src="" alt="Vista ampliada">
            <div id="lightbox-info"></div>
            <span class="close-btn" onclick="closeLightbox()">&times;</span>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="social-links">
            <a href="https://www.instagram.com/Astroveloxer" target="_blank" class="social-link">
                <img src="<?= base_url('public/images/instagram-logo.webp') ?>" alt="Instagram">
                <span>Astroveloxer</span>
            </a>
        </div>
        <div class="footer-info">
            <p>&copy; <?= date('Y') ?> Astroveloxer. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="<?= base_url('js/script.js') ?>"></script>
</body>
</html>
