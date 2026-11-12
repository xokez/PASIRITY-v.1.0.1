<?php
session_start();
require_once __DIR__ . '/includes/functions.php';
require_login();

$pageTitle = 'Historial de asistencia';
require __DIR__ . '/includes/header.php';
?>

<div class="page-heading">
    <div>
        <p class="eyebrow">CONSULTA DE REGISTROS</p>
        <h1>Historial de asistencia</h1>
        <p class="page-description">Consulta de asistencias anteriores por estudiante y período.</p>
    </div>
</div>

<div class="table-panel">
    <div class="table-scroll">
        <table>
            <thead>
                <tr>
                    <th>Estudiante</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <!-- Todavía no hay registros. -->
            </tbody>
        </table>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
