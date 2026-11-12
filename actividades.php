<?php
session_start();
require_once __DIR__ . '/includes/functions.php';
require_login();

$pageTitle = 'Trabajos y evaluaciones';
require __DIR__ . '/includes/header.php';
?>

<div class="page-heading">
    <div>
        <p class="eyebrow">SEGUIMIENTO ACADÉMICO</p>
        <h1>Trabajos prácticos y evaluaciones</h1>
        <p class="page-description">Organización de las instancias de evaluación del taller.</p>
    </div>
</div>

<div class="table-panel">
    <div class="table-scroll">
        <table>
            <thead>
                <tr>
                    <th>Nombre de la actividad</th>
                    <th>Tipo</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Todavía no hay registros. -->
            </tbody>
        </table>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
