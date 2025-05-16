<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astroveloxer</title>
    <link rel="stylesheet" href="<?= base_url('css/landing.css') ?>">
</head>
<body>
    <div class="stars"></div>
    
    <!-- HEADER -->
    <header class="top-header">
        <a href="<?= base_url('login') ?>" class="login-btn">Iniciar sesión</a>
    </header>

    <!-- HOME SECTION -->
    <section class="home" id="home">
        <div class="content" data-scroll-animation>
            <h3>¿Una estrella? ¿Un planeta?</h3>
            <p data-scroll-animation>Una página dedicada a ti, cuestionando esa pregunta.</p>
        </div>
    </section>

    <!-- NOSOTROS SECTION -->
    <section class="nosotros" id="Iniciar">
        <h1 class="heading"><span>El</span> <span>Porqué</span> <span>Ver</span> <span>Hacia</span> Arriba</h1>

        <div class="row" data-scroll-animation>
            <div class="image" data-scroll-animation>
                <img src="<?= base_url('images/secret.jpg') ?>" alt="nosotros" width="430px">
            </div>
            <div class="content" data-scroll-animation>
                <p>Desde siempre, la humanidad ha mirado al cielo en busca de respuestas. Las estrellas y planetas nos recuerdan lo vasto y misterioso que es el universo.</p>
                <p>La astronomía es la ciencia que estudia el cosmos, mientras que la astrofotografía es el arte de capturar su belleza en imágenes. Juntas, nos permiten explorar y entender el universo.</p>
                <p>Mirar hacia arriba es una invitación a descubrir y capturar la maravilla del cielo nocturno.</p>
            </div>
        </div>
    </section>

    <!-- SECCIÓN "Cómo Iniciar en Astrofotografía" -->
    <section class="como-iniciar" id="como-iniciar">
       

        <div class="announcement-yo" data-scroll-animation>
            <button class="reveal-button" onclick="toggleText()" data-scroll-animation>Consejos de un astrofotógrafo</button>
            
            <div id="hidden-text" class="hidden-text">
                <p>A lo largo de mi viaje en la astrofotografía, he enfrentado frustraciones y desafíos que parecían no tener solución.</p>
                <p>He creado esta página para que tú no tengas que pasar por lo mismo. Aquí te guiaré en los aspectos esenciales para que inicies y avances en este fascinante universo de la astrofotografía.</p>
                <p>Con el tiempo, muchas personas se han acercado a mí con preguntas como: "¿Qué tipo de telescopio debería elegir?", "¿Cómo puedo tomar fotos como las tuyas?" o "Compré un telescopio, pero no logro ver nada". Este espacio está dedicado a responder esas preguntas y a ayudarte a descubrir la realidad y la maravilla de comenzar en la astrofotografía.</p>
            </div>
        </div>
    </section>

    <section class="intro-astroveloxer" data-scroll-animation>
        <h2>¿Qué es Astroveloxer?</h2>
        <p data-scroll-animation>
            Astroveloxer es una plataforma creada para explorar, enseñar y compartir el arte de observar el cielo.  
            Aquí aprenderás astrofotografía desde cero, con guías reales, manuales personales y experiencias auténticas.
        </p>
        <p data-scroll-animation>
            Todas las imágenes que verás a continuación han sido capturadas por el propio equipo de Astroveloxer.
            Cada una guarda una historia y una noche de observación.
        </p>
        <p class="quote" data-scroll-animation>"Somos el universo contemplándose a sí mismo."</p>
    </section>

    <p class="gallery-note" data-scroll-animation>Haz clic en cualquier imagen para conocer más detalles sobre cada objeto celeste.</p>

    <!-- Galería de imágenes -->
    <div class="image-gallery" data-scroll-animation>
        <div class="image-item galaxia" onclick="showImage('<?= base_url('images/BD3E5271-1BBC-4657-8336-3CC50B5EB838.jpg') ?>', '<ul><li><strong>Nombre:</strong> Galaxia de la Aguja (Caldwell 38) (NGC 4565)</li><li><strong>Distancia:</strong> 40 millones de años luz</li><li><strong>Magnitud aparente:</strong> 9.6</li><li><strong>Constelación:</strong> Coma Berenices</li><li><strong>Tipo de objeto:</strong> Galaxia espiral</li></ul>')" data-scroll-animation>
            <img src="<?= base_url('images/BD3E5271-1BBC-4657-8336-3CC50B5EB838.jpg') ?>" alt="Galaxia de la Aguja" loading="lazy" width="400" height="200">
            <p>Galaxia de la Aguja</p>
        </div>

        <div class="image-item galaxia" onclick="showImage('<?= base_url('images/BODE_ASTROVELOXER (1).jpg') ?>', '<ul><li><strong>Nombre:</strong> Galaxia de Bode (M81) y Galaxia del Cigarro (M82)</li><li><strong>Distancia:</strong> 12 millones de años luz (ambas galaxias)</li><li><strong>Magnitud aparente:</strong> M81 (6.9), M82 (8.4)</li><li><strong>Constelación:</strong> Osa Mayor</li><li><strong>Tipo de objeto:</strong> M81: Galaxia espiral, M82: Galaxia irregular y galaxia con brote estelar</li></ul>')" data-scroll-animation>
            <img src="<?= base_url('images/BODE_ASTROVELOXER (1).jpg') ?>" alt="Galaxia de Bode y Cigarro" loading="lazy" width="400" height="200">
            <p>Galaxia de Bode y Galaxia del Cigarro</p>
        </div>

        <div class="image-item planeta" onclick="showImage('<?= base_url('images/jup11.jpg') ?>', '<ul><li><strong>Nombre:</strong> Júpiter</li><li><strong>Distancia media del Sol:</strong> 778 millones de km</li><li><strong>Diámetro:</strong> 142,984 km</li><li><strong>Tipo de objeto:</strong> Planeta gigante gaseoso</li><li><strong>Características:</strong> El planeta más grande del Sistema Solar, famoso por su Gran Mancha Roja y sus 79 lunas conocidas, incluyendo las cuatro lunas galileanas: Ío, Europa, Ganimedes y Calisto</li></ul>')" data-scroll-animation>
            <img src="<?= base_url('images/jup11.jpg') ?>" alt="Júpiter" loading="lazy" width="400" height="200">
            <p>Júpiter</p>
        </div>

        <div class="image-item luna" onclick="showImage('<?= base_url('images/lun_Original Copy (1).JPG') ?>', '<ul><li><strong>Nombre:</strong> La Luna</li><li><strong>Distancia media de la Tierra:</strong> 384,400 km</li><li><strong>Diámetro:</strong> 3,474.8 km</li><li><strong>Tipo de objeto:</strong> Satélite natural</li><li><strong>Características:</strong> Único satélite natural de la Tierra, presenta fases debido a su órbita alrededor de la Tierra, con una superficie marcada por cráteres, mares lunares y montañas</li></ul>')" data-scroll-animation>
            <img src="<?= base_url('images/lun_Original Copy (1).JPG') ?>" alt="La Luna" loading="lazy" width="400" height="200">
            <p>La Luna</p>
        </div>

        <div class="image-item galaxia" onclick="showImage('<?= base_url('images/M101_ASTROVELOXER (1).jpg') ?>', '<ul><li><strong>Nombre:</strong> Galaxia del Molinete (M101)</li><li><strong>Distancia:</strong> 21 millones de años luz</li><li><strong>Magnitud aparente:</strong> 7.9</li><li><strong>Constelación:</strong> Osa Mayor</li><li><strong>Tipo de objeto:</strong> Galaxia espiral</li><li><strong>Características:</strong> Una de las galaxias espirales más grandes conocidas, con un diámetro de aproximadamente 170,000 años luz</li></ul>')" data-scroll-animation>
            <img src="<?= base_url('images/M101_ASTROVELOXER (1).jpg') ?>" alt="Galaxia del Molinete" loading="lazy" width="400" height="200">
            <p>Galaxia del Molinete</p>
        </div>

        <div class="image-item galaxia" onclick="showImage('<?= base_url('images/NGC4038_ASTROVELOXER.jpg') ?>', '<ul><li><strong>Nombre:</strong> NGC 4038 y NGC 4039 (Galaxias Antennae)</li><li><strong>Distancia:</strong> 60 millones de años luz</li><li><strong>Magnitud aparente:</strong> 10.7</li><li><strong>Constelación:</strong> Corvus</li><li><strong>Tipo de objeto:</strong> Galaxias en colisión</li><li><strong>Características:</strong> Conocidas como las Galaxias Antennae debido a las largas colas de estrellas que se extienden hacia afuera, resultado de la colisión entre ambas galaxias</li></ul>')" data-scroll-animation>
            <img src="<?= base_url('images/NGC4038_ASTROVELOXER.jpg') ?>" alt="Galaxias Antennae" loading="lazy" width="400" height="200">
            <p>NGC 4038 y NGC 4039 (Galaxias Antennae)</p>
        </div>

        <div class="image-item nebulosa" onclick="showImage('<?= base_url('images/ORION-velozeronly~3.jpg') ?>', '<ul><li><strong>Nombre:</strong> Nebulosa de Orión (M42)</li><li><strong>Distancia:</strong> 1,344 años luz</li><li><strong>Magnitud aparente:</strong> 4.0</li><li><strong>Constelación:</strong> Orión</li><li><strong>Tipo de objeto:</strong> Nebulosa de emisión</li><li><strong>Características:</strong> Una de las nebulosas más brillantes en el cielo, visible a simple vista, región de formación estelar activa, hogar de muchas estrellas jóvenes y protoestrellas</li></ul>')" data-scroll-animation>
            <img src="<?= base_url('images/ORION-velozeronly~3.jpg') ?>" alt="Nebulosa de Orión" loading="lazy" width="400" height="200">
            <p>Nebulosa de Orión</p>
        </div>

        <div class="image-item planeta" onclick="showImage('<?= base_url('images/saturn (1).jpg') ?>', '<ul><li><strong>Nombre:</strong> Saturno</li><li><strong>Distancia media del Sol:</strong> 1,429 millones de km</li><li><strong>Diámetro:</strong> 120,536 km</li><li><strong>Tipo de objeto:</strong> Planeta gigante gaseoso</li><li><strong>Características:</strong> Conocido por sus prominentes anillos compuestos de hielo y roca, posee 83 lunas conocidas, siendo Titán la más grande y una de las más interesantes para la exploración</li></ul>')" data-scroll-animation>
            <img src="<?= base_url('images/saturn (1).jpg') ?>" alt="Saturno" loading="lazy" width="400" height="200">
            <p>Saturno</p>
        </div>

        <div class="image-item estrella" onclick="showImage('<?= base_url('images/sunfull_ASTROVELOXER.jpg') ?>', '<ul><li><strong>Nombre:</strong> El Sol</li><li><strong>Distancia media de la Tierra:</strong> 149.6 millones de km (1 Unidad Astronómica)</li><li><strong>Diámetro:</strong> 1,392,700 km</li><li><strong>Tipo de objeto:</strong> Estrella enana amarilla (tipo espectral G2V)</li><li><strong>Características:</strong> Estrella central del Sistema Solar y fuente principal de energía para la Tierra, compuesto principalmente de hidrógeno (74%) y helio (24%), con energía producida a través de la fusión nuclear en su núcleo</li></ul>')" data-scroll-animation>
            <img src="<?= base_url('images/sunfull_ASTROVELOXER.jpg') ?>" alt="El Sol" loading="lazy" width="400" height="200">
            <p>El Sol</p>
        </div>

        <div class="image-item nebulosa" onclick="showImage('<?= base_url('images/LAGOON.jpg') ?>', '<ul><li><strong>Nombre:</strong> Nebulosa de la Laguna (M8) (NGC 6523)</li><li><strong>Distancia:</strong> 4,100 años luz</li><li><strong>Magnitud aparente:</strong> 6.0</li><li><strong>Constelación:</strong> Sagitario</li><li><strong>Tipo de objeto:</strong> Nebulosa de emisión</li><li><strong>Características:</strong> Región de formación estelar activa, visible a simple vista desde cielos oscuros, hogar de muchas estrellas jóvenes y protoestrellas, famosa por su estructura brillante y oscura que se asemeja a una laguna.</li></ul>')" data-scroll-animation>
            <img src="<?= base_url('images/LAGOON.jpg') ?>" alt="Nebulosa de la Laguna" loading="lazy" width="400" height="200">
            <p>Nebulosa de la Laguna</p>
        </div>
    </div>

    <section class="cta-registro" data-scroll-animation>
        <h2>¿Te apasiona el cielo? Únete a Astroveloxer</h2>
        <a href="<?= base_url('registro') ?>" class="registro-btn" data-scroll-animation>Crear cuenta</a>
    </section>

    <!-- Footer -->
    <footer class="footer" data-scroll-animation>
        <div class="social-links">
            <a href="https://www.instagram.com/Astroveloxer" target="_blank" class="social-link" data-scroll-animation>
                <img src="img/instagram-logo.webp" alt="Instagram">
                <span>Astroveloxer</span>
            </a>
        </div>
        <div class="footer-info">
            <p>&copy; 2024 Astroveloxer. Todos los derechos reservados.</p>
        </div>
    </footer>
    
    <script src="<?= base_url('js/script.js') ?>"></script>
    
    <!-- Script para animación de scroll -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                }
            });
        }, { 
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        });

        document.querySelectorAll('[data-scroll-animation]').forEach(el => {
            observer.observe(el);
        });
    });

    function toggleText() {
        const hiddenText = document.getElementById('hidden-text');
        hiddenText.classList.toggle('show');
    }

    function showImage(src, info) {
        const lightbox = document.createElement('div');
        lightbox.className = 'lightbox';
        lightbox.innerHTML = `
            <div class="lightbox-content">
                <img src="${src}" alt="Imagen ampliada">
                <div id="lightbox-info">${info}</div>
                <span class="close-btn">&times;</span>
            </div>
        `;
        document.body.appendChild(lightbox);
        
        const closeBtn = lightbox.querySelector('.close-btn');
        closeBtn.addEventListener('click', () => {
            document.body.removeChild(lightbox);
        });
        
        lightbox.style.display = 'flex';
    }
    </script>
</body>
</html>