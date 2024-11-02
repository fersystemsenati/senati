<?php
header("Content-Type: application/json");
include 'config.php';

// Método POST para registrar un cliente
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $nombre = $data['nombre'] ?? '';
    $lugar = $data['lugar'] ?? '';

    if ($nombre && $lugar) {
        $stmt = $conn->prepare("INSERT INTO cliente (nombre, lugar) VALUES (?, ?)");
        $stmt->bind_param("ss", $nombre, $lugar);

        if ($stmt->execute()) {
            echo json_encode(["message" => "Nuevo registro creado exitosamente."]);
        } else {
            echo json_encode(["error" => "Error: " . $stmt->error]);
        }

        $stmt->close();
    } else {
        echo json_encode(["error" => "Datos incompletos."]);
    }

// Método GET para obtener la lista de clientes
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "consultando";
    $result = $conn->query("SELECT id, nombre, lugar FROM cliente");

    if ($result->num_rows > 0) {
        $clientes = [];
        while ($row = $result->fetch_assoc()) {
            $clientes[] = $row;
        }
        echo json_encode($clientes);
    } else {
        echo json_encode(["message" => "No hay resultados."]);
    }
}

$conn->close();
?>
