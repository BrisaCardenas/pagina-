<?php
include 'db.php'; 
include 'sidebar.php'; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial</title>
    <link rel="stylesheet" href="style2.css"> 
</head>
<body>
<div class="main-container">
    <div class="user-table">
        <h1>Historial</h1>
        <ul>
            <?php
            $sql = "SELECT h.id_historial, u.Nombre AS Usuario, e.Nombre AS Equipo, h.Fecha_devolucion 
            FROM historial h 
            JOIN usuario u ON h.usuario_id_Usuario = u.id_Usuario 
            JOIN equipo e ON h.equipo_id_Equipo = e.id_Equipo 
            ORDER BY h.Fecha_devolucion DESC";  
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li>
                            <strong>" . htmlspecialchars($row['Usuario']) . "</strong> - " . htmlspecialchars($row['Equipo']) . " - " . htmlspecialchars($row['Fecha_devolucion']) . "
                          </li>";
                }
            } else {
                echo "<li>No hay registros en el historial.</li>";
            }
            ?>
        </ul>
    </div>
</div>
</body>
</html>