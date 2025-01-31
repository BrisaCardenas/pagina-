<?php

$servername = "127.0.0.1";
$username = "root"; 
$password = ""; 
$dbname = "gestion"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>