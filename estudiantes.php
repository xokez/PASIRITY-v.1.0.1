<?php
session_start();
require_once __DIR__ . '/includes/functions.php';
require_login();

$pageTitle = 'Estudiantes';
require __DIR__ . '/includes/header.php';
?>

<div class="page-heading">
    <div>
        <p class="eyebrow">REGISTRO DEL CURSO</p>
        <h1>Estudiantes</h1>
        <p class="page-description">Administración de los datos básicos de cada estudiante.</p>
    </div>
</div>

<div class="table-panel">
    <div class="table-scroll">
        <table>
            <thead>
                <tr>
                    <th>Apellido y nombre</th>
                    <th>Documento</th>
                    <th>Curso</th>
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
