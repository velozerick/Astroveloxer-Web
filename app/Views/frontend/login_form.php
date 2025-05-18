<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Astroveloxer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('css/registro.css') ?>">
</head>
<body>
    <div class="stars"></div>

    <div class="login-box">
        <h1 class="main-title">Astroveloxer</h1>
        <h2>Iniciar Sesión</h2>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('login/acceder') ?>" method="POST">
            <?= csrf_field() ?>

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
                Iniciar Sesión
            </button>

            <a href="<?= base_url('registro') ?>" class="signup-link">
                <span></span><span></span><span></span><span></span>
                Crear cuenta
            </a>
        </form>
    </div>

    <script src="<?= base_url('js/registro.js') ?>"></script>
</body>
</html>
