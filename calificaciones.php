<?php
session_start();
require_once __DIR__ . '/includes/functions.php';
require_login();

$pageTitle = 'Calificaciones';
require __DIR__ . '/includes/header.php';
?>

<div class="page-heading">
    <div>
        <p class="eyebrow">SEGUIMIENTO DE NOTAS</p>
        <h1>Calificaciones</h1>
        <p class="page-description">Consulta y carga de notas por estudiante y actividad.</p>
    </div>
</div>

<div class="table-panel">
    <div class="table-scroll">
        <table>
            <thead>
                <tr>
                    <th>Estudiante</th>
                    <th>Actividad</th>
                    <th>Calificación</th>
                    <th>Observaciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Todavía no hay registros. -->
            </tbody>
        </table>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
