<?php
$servidor = "localhost";
$usuario = "root";     // O el usuario que tengas configurado
$password = "tu_password"; // PON AQUÍ TU CONTRASEÑA DE MYSQL
$bd = "taller_ruben";

$conn = new mysqli($servidor, $usuario, $password, $bd);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>