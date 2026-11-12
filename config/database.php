<?php
declare(strict_types=1);

// Datos de conexión predeterminados para XAMPP.
const DB_HOST = 'localhost';
const DB_NAME = 'pasirity';
const DB_USER = 'root';
const DB_PASS = '';

function db(): PDO
{
    static $conexion = null;

    if ($conexion instanceof PDO) {
        return $conexion;
    }

    $dsn = 'mysql:host=' . DB_HOST
        . ';dbname=' . DB_NAME
        . ';charset=utf8mb4';

    $conexion = new PDO($dsn, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);

    return $conexion;
}
