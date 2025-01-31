<?php
include 'db.php'; 
include 'sidebar.php'; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignaciones</title>
    <link rel="stylesheet" href="style2.css"> 
</head>
<body>
<div class="main-container">
    <div class="user-table">
        <h1>Asignaciones</h1>
        <ul>
            <?php
            $sql = "SELECT a.id_Asignaciones, u.Nombre AS Usuario, e.Nombre AS Equipo, a.Fecha_entrega 
                    FROM asignaciones a 
                    JOIN usuario u ON a.usuario_id_Usuario = u.id_Usuario 
                    JOIN equipo e ON a.equipo_id_Equipo = e.id_Equipo 
                    ORDER BY a.Fecha_entrega DESC"; 
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li>
                            <strong>" . htmlspecialchars($row['Usuario']) . "</strong> - " . htmlspecialchars($row['Equipo']) . " - " . htmlspecialchars($row['Fecha_entrega']) . "
                          </li>";
                }
            } else {
                echo "<li>No hay asignaciones registradas.</li>";
            }
            ?>
        </ul>
    </div>
</div>
</body>
</html>