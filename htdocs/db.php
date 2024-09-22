<?php
$servername = "localhost";
$username = "root";
$password = "root";  // Reemplaza con la contraseña correcta
$dbname = "Estacionamiento";
$port = 8889;  // Especifica el puerto 8889

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>