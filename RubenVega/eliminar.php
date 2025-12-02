<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM autos WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ver_registros.php");
    } else {
        echo "Error al eliminar: " . $conn->error;
    }
}
$conn->close();
?>