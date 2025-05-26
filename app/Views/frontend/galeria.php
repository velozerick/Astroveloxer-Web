<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Galería | Astroveloxer</title>
  <link rel="stylesheet" href="<?= base_url('css/galeria.css') ?>">
</head>
<body>

<div class="stars"></div>

<!-- Barra de navegación -->
<header class="header">
  <nav class="navbar">
    <ul class="nav">
      <li><a href="<?= base_url('/inicio') ?>">ASTROVELOXER</a></li>
      <li><a href="<?= base_url('/galeria') ?>">Galería</a></li>
      <li><a href="<?= base_url('/foro') ?>">Foro</a></li>
      <li><a href="<?= base_url('/calendario') ?>">Calendario</a></li>
      <li><a href="<?= base_url('/logout') ?>">Cerrar sesión</a></li>
    </ul>
  </nav>
</header>
 <div class="gallery-nav-toggle">
    <button onclick="scrollToSection('astrofotografia')">📷 Galería AstroVeloxer</button>
    <button onclick="scrollToSection('comunidad')">🪐 Galería Comunidad</button>
</div>

<!-- GALERÍA PRINCIPAL -->
<section class="gallery-section" id="astrofotografia">
  <div class="section-header" style="text-align: left; padding-left: 40px;">
    <h2 style="font-size: 3rem;">Galería AstroVeloxer</h2>
    <p>Nuestra colección de imágenes astronómicas profesionales</p>
  </div>



  <div class="filter-buttons">
    <button data-filter="all" class="active">Todo</button>
    <button data-filter="nebulosa">Nebulosas</button>
    <button data-filter="planeta">Planetas</button>
    <button data-filter="galaxia">Galaxias</button>
    <button data-filter="luna">Luna</button>
    <button data-filter="estrella">Estrellas</button>
  </div>

  <div class="masonry-gallery" id="main-gallery">
    <!-- Ejemplos de imágenes por categoría -->
    <?php
    $imagenes = [
      'nebulosa', 'nebulosa', 'planeta', 'planeta', 'galaxia', 'galaxia', 'luna', 'luna', 'estrella', 'estrella'
    ];
    foreach ($imagenes as $categoria):
    ?>
    <div class="gallery-item <?= $categoria ?>" data-category="<?= $categoria ?>">
      <img src="<?= base_url('images/LAGOON.jpg') ?>" alt="<?= ucfirst($categoria) ?>" loading="lazy">
      <div class="item-info">
        <h3><?= ucfirst($categoria) ?> destacada</h3>
        <p>Desde el universo</p>
        <button class="info-btn" onclick="showImageInfo(this)">+ Info</button>
      </div>
      <div class="item-details">
        <ul>
          <li><strong>Nombre:</strong> Objeto ejemplo <?= ucfirst($categoria) ?></li>
          <li><strong>Distancia:</strong> Datos simulados</li>
          <li><strong>Magnitud:</strong> 7.9</li>
        </ul>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- GALERÍA DE LA COMUNIDAD -->
<section class="community-section" id="comunidad">
  <div class="section-header" style="text-align: left; padding-left: 40px;">
    <h2 style="font-size: 2.8rem;">Galería de la Comunidad</h2>
    <p>Comparte tus propias capturas del cosmos</p>
  </div>

  <!-- Formulario -->
  <div class="upload-form-container">
    <form id="community-upload" class="upload-form">
      <div class="form-group">
        <input type="text" id="user-name" maxlength="100" placeholder="Tu nombre (máx 100 caracteres)" required>
      </div>
      <div class="form-group">
        <textarea id="photo-description" maxlength="300" placeholder="Describe tu foto (máx 300 caracteres)" required></textarea>
        <div class="char-counter"><span>0</span>/300</div>
      </div>
      <div class="form-group file-upload">
        <label for="photo-upload" class="upload-label">
          <span>Seleccionar imagen</span>
          <input type="file" id="photo-upload" accept="image/*" required>
        </label>
        <div class="file-info">Ningún archivo seleccionado</div>
      </div>
      <button type="submit" class="submit-btn">Publicar</button>
    </form>
  </div>

  <!-- Imágenes de la comunidad -->
  <div class="masonry-gallery" id="community-gallery">
    <?php for ($i = 1; $i <= 4; $i++): ?>
    <div class="community-item">
      <img src="<?= base_url('images/m101.jpg') ?>" alt="Imagen comunidad" loading="lazy">
      <div class="item-info">
        <div class="community-info">
          <h3>Captura N°<?= $i ?></h3>
          <p class="user-meta">Por <span>AstroUser<?= $i ?></span> · 2024</p>
          <p class="user-description">Capturada con equipo amateur desde el patio. Exposición de 25 segundos.</p>
          <div class="interaction-buttons">
            <button class="like-btn">❤️ <?= rand(5, 50) ?></button>
          </div>
        </div>
      </div>
    </div>
    <?php endfor; ?>
  </div>
</section>

<!-- LIGHTBOX -->
<div class="lightbox" id="image-lightbox">
  <span class="close-btn" onclick="closeLightbox()">&times;</span>
  <div class="lightbox-content">
    <img id="lightbox-image" src="" alt="">
    <div class="lightbox-info" id="lightbox-info"></div>
  </div>
</div>

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

<script src="<?= base_url('js/galeria.js')?>"></script>
<script src="<?=base_url('js/script.js')?>"></script>
</body>
</html>
