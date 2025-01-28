<?php
include 'sidebar.php';
include 'db.php'; 
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
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($row['Nombre']); ?>" required>
            
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" value="<?php echo htmlspecialchars($row['Correo']); ?>" required>
             
            <button type="submit" class="btn-update">Actualizar</button>
            <button type="button" class="btn-delete" onclick="deleteUser(<?php echo $row['id']; ?>)">Eliminar</button>
        </form>
        
    </div>
    
    <div class="user-table">
        <h1>Personas JX</h1>
        <ul>
            <?php
            // Consulta para la tabla de usuarios
            $sql = "SELECT Nombre, Correo FROM usuario";
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li>" . htmlspecialchars($row['Nombre']) . " - " . htmlspecialchars($row['Correo']) . "</li>";
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
