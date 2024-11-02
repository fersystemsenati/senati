<?php
$host = 'misventas01.mysql.database.azure.com';
$db = 'ventas2024';
$user = 'azuremysqlsenati';
$pass = 'Senati2024';
$port = 3306;
/*
$hostname = "misventas01.mysql.database.azure.com";
    $port = 3306;
    $username = "azuremysqlsenati";
    $password = "Senati2024";
    $database = "ventas2024";
    
*/
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
