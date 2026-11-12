<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

require_once __DIR__ . '/functions.php';
$pageTitle = $pageTitle ?? 'Inicio';
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($pageTitle) ?> · PASIRITY</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="app-shell">
    <aside class="sidebar" id="sidebar">
        <a class="brand" href="index.php" aria-label="PASIRITY, inicio">
            <span class="brand-mark">P</span>
            <span>PASIRITY</span>
        </a>

        <div class="nav-caption">GESTIÓN ACADÉMICA</div>
        <nav class="main-nav" aria-label="Navegación principal">
            <?= nav_link('index.php', 'Inicio', '<svg viewBox="0 0 24 24"><path d="m3 10 9-7 9 7v10a1 1 0 0 1-1 1h-6v-7h-4v7H4a1 1 0 0 1-1-1z"/></svg>') ?>
            <?= nav_link('asistencia.php', 'Asistencia', '<svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="17" rx="2"/><path d="M8 2v4M16 2v4M3 9h18M8 14l2 2 5-5"/></svg>') ?>
            <?= nav_link('estudiantes.php', 'Estudiantes', '<svg viewBox="0 0 24 24"><circle cx="9" cy="8" r="3"/><path d="M3 20v-2a6 6 0 0 1 12 0v2M16 5a3 3 0 0 1 0 6M18 14a5 5 0 0 1 3 5v1"/></svg>') ?>
            <?= nav_link('actividades.php', 'Trabajos y evaluaciones', '<svg viewBox="0 0 24 24"><path d="M8 4h11a2 2 0 0 1 2 2v15H6V6a2 2 0 0 1 2-2zM9 2v4M3 8v13h3M9 10h8M9 14h8M9 18h5"/></svg>') ?>
            <?= nav_link('calificaciones.php', 'Calificaciones', '<svg viewBox="0 0 24 24"><path d="M4 4h16v16H4zM8 8h3v3H8zM14 8h2M14 11h2M8 15h3M14 15h2M14 18h2"/></svg>') ?>
            <?= nav_link('historial.php', 'Historial de asistencia', '<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2M3 4v5h5"/></svg>') ?>
        </nav>

        <div class="sidebar-bottom">
            <div class="profile-mark">D</div>
            <div class="profile-copy">
                <strong><?= e((string) ($_SESSION['pasirity_user']['nombre'] ?? 'Docente')) ?></strong>
                <span><a href="logout.php">Cerrar sesión</a></span>
            </div>
        </div>
    </aside>

    <main class="main-area">
        <header class="topbar">
            <button
                class="mobile-menu"
                type="button"
                aria-label="Abrir navegación"
                aria-controls="sidebar"
                aria-expanded="false"
                id="menuToggle"
            >
                <svg viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>

            <div class="breadcrumb">PASIRITY <span>/</span> <?= e($pageTitle) ?></div>
            <div class="topbar-label">Sistema de gestión académica</div>
        </header>

        <section class="page-content">
