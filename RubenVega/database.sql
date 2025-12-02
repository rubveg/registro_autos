CREATE DATABASE IF NOT EXISTS taller_ruben;
USE taller_ruben;

CREATE TABLE IF NOT EXISTS autos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    propietario VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    placas VARCHAR(20) NOT NULL,
    modelo VARCHAR(100) NOT NULL,
    descripcion_servicio TEXT,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
