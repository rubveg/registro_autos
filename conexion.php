<?php
$servidor = "localhost";
$usuario = "rubveg";     // O el usuario que tengas configurado
$password = "Tallerruben12!"; // PON AQUÍ TU CONTRASEÑA DE MYSQL
$bd = "taller_ruben";

$conn = new mysqli($servidor, $usuario, $password, $bd);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>