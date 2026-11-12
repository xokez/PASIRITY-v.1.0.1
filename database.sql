-- PASIRITY: estructura de base de datos para MySQL/MariaDB.
-- No se incluyen estudiantes, actividades ni asistencias de ejemplo.

CREATE DATABASE IF NOT EXISTS pasirity
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE pasirity;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(60) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    nombre VARCHAR(120) NOT NULL,
    creado_en TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS estudiantes (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    apellido_nombre VARCHAR(160) NOT NULL,
    documento VARCHAR(20) NULL UNIQUE,
    curso VARCHAR(40) NULL,
    creado_en TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS actividades (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(180) NOT NULL,
    tipo ENUM('trabajo_practico', 'evaluacion') NOT NULL,
    fecha DATE NULL,
    creado_en TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS asistencias (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    estudiante_id INT UNSIGNED NOT NULL,
    fecha DATE NOT NULL,
    hora TIME NOT NULL,
    estado ENUM('presente', 'ausente', 'tarde', 'justificado') NOT NULL,
    observaciones VARCHAR(500) NULL,
    creado_en TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_asistencias_estudiante
        FOREIGN KEY (estudiante_id)
        REFERENCES estudiantes(id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT,
    UNIQUE KEY uq_asistencia_dia (estudiante_id, fecha)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS calificaciones (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    estudiante_id INT UNSIGNED NOT NULL,
    actividad_id INT UNSIGNED NOT NULL,
    calificacion DECIMAL(5, 2) NULL,
    observaciones VARCHAR(500) NULL,
    creado_en TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_calificaciones_estudiante
        FOREIGN KEY (estudiante_id)
        REFERENCES estudiantes(id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT,
    CONSTRAINT fk_calificaciones_actividad
        FOREIGN KEY (actividad_id)
        REFERENCES actividades(id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT,
    UNIQUE KEY uq_nota_estudiante_actividad (estudiante_id, actividad_id)
) ENGINE=InnoDB;

-- La cuenta docente se crea ejecutando create_admin.php una sola vez.
