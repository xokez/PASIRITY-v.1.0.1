<?php
session_start();
require_once __DIR__ . '/includes/functions.php';
require_login();

$pageTitle = 'Asistencia';
require __DIR__ . '/includes/header.php';
?>

<div class="page-heading">
    <div>
        <p class="eyebrow">CONTROL DE INGRESO</p>
        <h1>Asistencia</h1>
        <p class="page-description">Registro de presencia al ingresar al taller.</p>
    </div>
</div>

<div class="table-panel">
    <div class="table-scroll">
        <table>
            <thead>
                <tr>
                    <th>Estudiante</th>
                    <th>Documento</th>
                    <th>Asistencia</th>
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
