<?php
include 'db.php'; // Conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_usuario'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    // Consulta SQL para actualizar los datos
    $sql = "UPDATE usuario SET Nombre=?, Correo=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $nombre, $correo, $id);

    if ($stmt->execute()) {
        echo "Datos actualizados correctamente.";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>