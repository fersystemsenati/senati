<?php
header("Content-Type: application/json");
include 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $nombre = $_POST['nombre'] ?? null;
        $lugar = $_POST['lugar'] ?? null;

        if ($nombre && $lugar) {
            $stmt = $conn->prepare("INSERT INTO cliente (nombre, lugar) VALUES (?, ?)");
            $stmt->bind_param("ss", $nombre, $lugar);

            $response = $stmt->execute()
                ? ["message" => "Nuevo registro creado exitosamente."]
                : ["error" => "Error: " . $stmt->error];

            $stmt->close();
        } else {
            $response = ["error" => "Datos incompletos."];
        }
        echo json_encode($response);
        break;

    case 'GET':
        $result = $conn->query("SELECT id, nombre, lugar FROM cliente");
        $clientes = $result->fetch_all(MYSQLI_ASSOC);
        
        echo json_encode($clientes ?: ["message" => "No hay resultados."]);
        break;

    default:
        echo json_encode(["error" => "Método no soportado"]);
        break;
}

$conn->close();
?>
