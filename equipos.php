<?php
include 'db.php'; 
include 'sidebar.php'; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos</title>
    <link rel="stylesheet" href="equipos.css"> 
    <link rel="stylesheet" href="style2.css"> 
</head>
<body>
<div class="main-container">
    <div class="user-table">
        <h1>Equipos</h1>
        <ul>
            <li class="columna">
                <div><strong>Nombre</strong></div>
                <div><strong>Tipo de Equipo</strong></div>
                <div><strong>Estado</strong></div>
                <div><strong>Descripción</strong></div>
            </li>
            <?php
            // Consulta 
            $sql = "SELECT Nombre, Tipo_Equipo, Estado, Descripcion FROM equipo ORDER BY Nombre ASC"; 
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li>
                            <div>" . htmlspecialchars($row['Nombre']) . "</div>
                            <div>" . htmlspecialchars($row['Tipo_Equipo']) . "</div>
                            <div>" . htmlspecialchars($row['Estado']) . "</div>
                            <div>" . htmlspecialchars($row['Descripcion']) . "</div>
                          </li>";
                }
            } else {
                echo "<li>No hay equipos.</li>";
            }
            ?>
        </ul>
    </div>
</div>
</body>
</html>