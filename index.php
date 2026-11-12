<?php
session_start();
require_once __DIR__ . '/includes/functions.php';
require_login();

$pageTitle = 'Inicio';
require __DIR__ . '/includes/header.php';
?>

<div class="page-heading">
    <div>
        <p class="eyebrow">ESPACIO DE TRABAJO</p>
        <h1>Inicio</h1>
        <p class="page-description">Accedé a las secciones principales del taller.</p>
    </div>
</div>

<div class="home-layout">
    <div class="welcome-panel">
        <div class="welcome-line"></div>
        <p class="eyebrow">PASIRITY · TALLER TÉCNICO</p>
        <h2>Gestión académica,<br>en un solo lugar.</h2>
        <p>Un espacio centralizado para organizar la asistencia y el seguimiento de las calificaciones.</p>
    </div>

    <div class="section-shortcuts">
        <a class="shortcut" href="asistencia.php">
            <span class="shortcut-icon">
                <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="17" rx="2"/><path d="M8 2v4M16 2v4M3 9h18M8 14l2 2 5-5"/></svg>
            </span>
            <span><strong>Asistencia</strong><small>Registro de ingreso al taller</small></span>
            <span class="arrow">↗</span>
        </a>

        <a class="shortcut" href="estudiantes.php">
            <span class="shortcut-icon">
                <svg viewBox="0 0 24 24"><circle cx="9" cy="8" r="3"/><path d="M3 20v-2a6 6 0 0 1 12 0v2M16 5a3 3 0 0 1 0 6M18 14a5 5 0 0 1 3 5v1"/></svg>
            </span>
            <span><strong>Estudiantes</strong><small>Listado y gestión del curso</small></span>
            <span class="arrow">↗</span>
        </a>

        <a class="shortcut" href="actividades.php">
            <span class="shortcut-icon">
                <svg viewBox="0 0 24 24"><path d="M8 4h11a2 2 0 0 1 2 2v15H6V6a2 2 0 0 1 2-2zM9 2v4M3 8v13h3M9 10h8M9 14h8"/></svg>
            </span>
            <span><strong>Trabajos y evaluaciones</strong><small>Organización de actividades</small></span>
            <span class="arrow">↗</span>
        </a>

        <a class="shortcut" href="calificaciones.php">
            <span class="shortcut-icon">
                <svg viewBox="0 0 24 24"><path d="M4 4h16v16H4zM8 8h3v3H8zM14 8h2M8 15h3M14 15h2"/></svg>
            </span>
            <span><strong>Calificaciones</strong><small>Notas por actividad</small></span>
            <span class="arrow">↗</span>
        </a>

        <a class="shortcut" href="historial.php">
            <span class="shortcut-icon">
                <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2M3 4v5h5"/></svg>
            </span>
            <span><strong>Historial de asistencia</strong><small>Consulta de registros anteriores</small></span>
            <span class="arrow">↗</span>
        </a>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
