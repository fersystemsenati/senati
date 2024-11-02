<?php
$hostname = "misventas01.mysql.database.azure.com";
$port = 3306;
$username = "azuremysqlsenati";
$password = "Senati2024";
$database = "ventas2024";

// Crear conexión
$conn = new mysqli($hostname, $username, $password, $database, $port);

// Comprobar conexión
if ($conn->connect_error) {
    die(json_encode(["error" => "Conexión fallida: " . $conn->connect_error]));
}
?>
