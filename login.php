<?php
session_start();

$error = '';

if (!empty($_SESSION['pasirity_user'])) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim((string) ($_POST['usuario'] ?? ''));
    $contrasena = (string) ($_POST['contrasena'] ?? '');

    try {
        require_once __DIR__ . '/config/database.php';

        $consulta = db()->prepare(
            'SELECT usuario, password_hash, nombre FROM usuarios WHERE usuario = ? LIMIT 1'
        );
        $consulta->execute([$usuario]);
        $cuenta = $consulta->fetch();

        if ($cuenta && password_verify($contrasena, $cuenta['password_hash'])) {
            session_regenerate_id(true);
            $_SESSION['pasirity_user'] = [
                'usuario' => $cuenta['usuario'],
                'nombre' => $cuenta['nombre'],
            ];

            header('Location: index.php');
            exit;
        }
    } catch (Throwable $errorBaseDatos) {
        // No se muestran detalles internos de la base de datos.
    }

    $error = 'No se pudo iniciar sesión. Revisá el usuario y la contraseña.';
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar sesión · PASIRITY</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="login-page">
    <main class="login-layout">
        <section class="login-aside">
            <a class="brand brand-light" href="login.php">
                <span class="brand-mark">P</span>
                <span>PASIRITY</span>
            </a>

            <div class="login-message">
                <p class="eyebrow">GESTIÓN ACADÉMICA</p>
                <h1>Organización clara.<br>Seguimiento simple.</h1>
                <p>Acceso institucional al sistema del taller.</p>
            </div>

            <div class="login-footer">Escuela técnica · Taller de Hardware</div>
        </section>

        <section class="login-main">
            <form class="login-form" action="login.php" method="post">
                <p class="eyebrow">ACCESO DOCENTE</p>
                <h2>Iniciar sesión</h2>
                <p class="login-description">Ingresá tus credenciales para continuar.</p>

                <?php if ($error !== ''): ?>
                    <div class="form-alert" role="alert">
                        <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?>
                    </div>
                <?php endif; ?>

                <label for="usuario">Usuario</label>
                <input
                    id="usuario"
                    name="usuario"
                    autocomplete="username"
                    placeholder="Usuario"
                    required
                    value="<?= htmlspecialchars((string) ($_POST['usuario'] ?? ''), ENT_QUOTES, 'UTF-8') ?>"
                >

                <label for="contrasena">Contraseña</label>
                <input
                    id="contrasena"
                    name="contrasena"
                    type="password"
                    autocomplete="current-password"
                    placeholder="Contraseña"
                    required
                >

                <button class="button button-primary button-full" type="submit">
                    Ingresar
                </button>
            </form>
        </section>
    </main>
</body>
</html>
