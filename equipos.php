<?php
include 'db.php'; 
include 'sidebar.php'; // Incluir la sidebar
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
            <?php
            // Consulta equipos
            $sql = "SELECT Nombre, Tipo_Equipo, Estado, Descripcion FROM equipo"; 
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li>" . htmlspecialchars($row['Nombre']) . " - " . htmlspecialchars($row['Tipo_Equipo']) . " - " . htmlspecialchars($row['Estado']) . " - " . htmlspecialchars($row['Descripcion']) . "</li>";
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