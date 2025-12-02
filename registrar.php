<?php
include 'conexion.php';

$propietario = $_POST['propietario'];
$email = $_POST['email'];
$placas = $_POST['placas'];
$modelo = $_POST['modelo'];
$descripcion = $_POST['descripcion'];

// 1. Insertar en Base de Datos
$sql = "INSERT INTO autos (propietario, email, placas, modelo, descripcion_servicio) 
        VALUES ('$propietario', '$email', '$placas', '$modelo', '$descripcion')";

if ($conn->query($sql) === TRUE) {
    
    // 2. Enviar Correo
    $to = $email;
    $subject = "Confirmacion de Servicio - Taller Ruben";
    $message = "Hola $propietario,\n\nHemos registrado tu $modelo con placas $placas para servicio: $descripcion.\n\nGracias por confiar en nosotros.";
    $headers = "From: no-reply@rubenvega.online";

    // Intentar enviar
    mail($to, $subject, $message, $headers);

    echo "<script>
            alert('Auto registrado y correo enviado correctamente');
            window.location.href='index.html';
          </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>