<?php
include 'db.php'; 
include 'sidebar.php'; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incidentes</title>
    <link rel="stylesheet" href="style2.css"> 
</head>
<body>
<div class="main-container">
    <div class="user-table">
        <h1>Incidentes</h1>
        <ul>
            <?php
            $sql = "SELECT i.id_Incidentes, u.Nombre AS Usuario, e.Nombre AS Equipo, i.Fecha, i.Descripcion_suceso 
                    FROM incidentes i 
                    JOIN usuario u ON i.usuario_id_Usuario = u.id_Usuario 
                    JOIN equipo e ON i.equipo_id_Equipo = e.id_Equipo 
                    ORDER BY i.Fecha DESC"; 
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li>
                            <strong>" . htmlspecialchars($row['Descripcion_suceso']) . "</strong> - " . htmlspecialchars($row['Usuario']) . " - " . htmlspecialchars($row['Equipo']) . " - " . htmlspecialchars($row['Fecha']) . "
                          </li>";
                }
            } else {
                echo "<li>No hay incidentes registrados.</li>";
            }
            ?>
        </ul>
    </div>
</div>
</body>
</html>