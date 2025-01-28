<?php 
include 'db.php'; 
include 'sidebar.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="style2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="style2.css">
    <script src="script1.js" defer></script> 
</head>
<body>
    
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($row['Nombre']); ?>" required>
    
    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo" value="<?php echo htmlspecialchars($row['Correo']); ?>" required>
    
    <button type="submit">Actualizar</button>
</form>

    </div>
    <?php $conn->close(); ?>
    </div>

    <script src="script1.js" defer></script>
</body>
</html>



