<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Autos</title>
    <link rel="stylesheet" href="style.css">
    <style>.container { width: 80%; max-width: 800px; }</style>
</head>
<body>
    <div class="container">
        <h1>📋 Autos Registrados</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Propietario</th>
                    <th>Placas</th>
                    <th>Servicio</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM autos";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["propietario"] . "<br><small>" . $row["email"] . "</small></td>";
                        echo "<td>" . $row["placas"] . "<br><small>" . $row["modelo"] . "</small></td>";
                        echo "<td>" . $row["descripcion_servicio"] . "</td>";
                        echo "<td><a href='eliminar.php?id=" . $row["id"] . "' class='btn-eliminar' onclick='return confirm(\"¿Seguro que deseas eliminar este registro?\")'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No hay autos registrados</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <a href="index.html" class="btn-ver">⬅ Volver al registro</a>
    </div>
</body>
</html>