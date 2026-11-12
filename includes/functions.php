<?php
declare(strict_types=1);

// Evita que el texto ingresado por una persona se interprete como HTML.
function e(string $texto): string
{
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}

// Envía al inicio de sesión a quien no inició sesión.
function require_login(): void
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    if (empty($_SESSION['pasirity_user'])) {
        header('Location: login.php');
        exit;
    }
}

// Devuelve el nombre del archivo PHP que se está mostrando.
function current_page(): string
{
    return basename($_SERVER['PHP_SELF'] ?? 'index.php');
}

// Crea un enlace de navegación y marca la página actual.
function nav_link(string $archivo, string $texto, string $icono): string
{
    $activo = current_page() === $archivo ? ' active' : '';

    return '<a class="nav-link' . $activo . '" href="' . e($archivo) . '">'
        . '<span class="nav-icon" aria-hidden="true">' . $icono . '</span>'
        . '<span>' . e($texto) . '</span>'
        . '</a>';
}
