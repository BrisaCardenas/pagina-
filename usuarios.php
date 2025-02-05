<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php'; 
include 'sidebar.php'; 

$sql = "SELECT Nombre, Correo FROM usuario ORDER BY Nombre ASC"; 
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas JX</title>
    <link rel="stylesheet" href="usuarios.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>


<div class="main-container"> 
    <div class="edit-form">
        <form action="update.php" method="POST"> 
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required>
             
            <button type="submit" class="btn-update">Agregar Usuario</button>
        </form>

    </div>
    
    <div class="user-table">
        <h1>Personas JX</h1>
        <ul>
            <?php

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li>
                            <strong>" . htmlspecialchars($row['Nombre']) . "</strong> - " . htmlspecialchars($row['Correo']) . "
                          </li>";
                }
            } else {
                echo "<li>No hay usuarios.</li>";
            }
            ?>
        </ul>
    </div>
</div> 
</body>
</html>
