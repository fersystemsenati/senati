<?php
//require_once '../config/database.php';
require_once 'database.php';

class AsistenciaService {
    public function crearAsistencia($usuario_id, $fecha, $hora_entrada, $estado) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO Asistencias (usuario_id, fecha, hora_entrada, estado) VALUES (?, ?, ?, ?)");
        $stmt->execute([$usuario_id, $fecha, $hora_entrada, $estado]);
    }

    public function obtenerAsistencias() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM Asistencias");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function actualizarAsistencia($id, $hora_salida) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE Asistencias SET hora_salida = ? WHERE id = ?");
        $stmt->execute([$hora_salida, $id]);
    }

    public function eliminarAsistencia($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM Asistencias WHERE id = ?");
        $stmt->execute([$id]);
    }
}
//servicio
?>
