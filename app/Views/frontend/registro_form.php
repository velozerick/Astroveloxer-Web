<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Astroveloxer</title>
    
    <!-- Font Awesome (íconos para el toggle de contraseña) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Tu CSS -->
    <link rel="stylesheet" href="<?= base_url('css/registro.css') ?>">
</head>
<body>

    <!-- Fondo de estrellas -->
    <div class="stars"></div>

    <!-- Caja de Registro -->
    <div class="login-box">
        <h1 class="main-title">Astroveloxer</h1>
        <h2>Regístrate</h2>

        <form action="<?= base_url('registro/guardar') ?>" method="POST">
            <?= csrf_field() ?>

            <div class="user-box">
                <input type="text" name="nombre" placeholder="Nombre" required>
                <label>Nombre</label>
            </div>

            <div class="user-box">
                <input type="email" name="email" placeholder="Email" required>
                <label>Email</label>
            </div>

            <div class="user-box">
                <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" required>
                <label>Contraseña</label>
                <i class="fas fa-eye toggle-password" onclick="togglePassword()" id="togglePassword"></i>
            </div>

            <button type="submit" class="login-button">
                <span></span><span></span><span></span><span></span>
                Registrarse
            </button>

            <a href="<?= base_url('login') ?>" class="signup-link">
                <span></span><span></span><span></span><span></span>
                Inicia Sesión
            </a>
        </form>
    </div>

    <!-- Tu script de estrellas y toggle -->
    <script src="<?= base_url('js/registro.js') ?>"></script>
</body>
</html>
