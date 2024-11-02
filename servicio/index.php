<?php
require_once '../servicio/AsistenciaService.php';

$asistenciaService = new AsistenciaService();

// Manejo de solicitudes
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['crear'])) {
        $asistenciaService->crearAsistencia($_POST['usuario_id'], date('Y-m-d'), date('H:i:s'), 'presente');
    } elseif (isset($_POST['actualizar'])) {
        $asistenciaService->actualizarAsistencia($_POST['id'], date('H:i:s'));
    } elseif (isset($_POST['eliminar'])) {
        $asistenciaService->eliminarAsistencia($_POST['id']);
    }
}

// Obtener asistencias   ..
$asistencias = $asistenciaService->obtenerAsistencias();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Control de Asistencia</title>
</head>
<body>
    <h1>Registro de Asistencia</h1>

    <form method="POST">
        <input type="hidden" name="usuario_id" value="1"> <!-- Ejemplo de usuario_id -->
        <button type="submit" name="crear">Registrar Asistencia</button>
    </form>

    <h2>Lista de Asistencias</h2>
    <ul>
        <?php foreach ($asistencias as $asistencia): ?>
            <li>
                Usuario ID: <?= $asistencia['usuario_id'] ?>, Fecha: <?= $asistencia['fecha'] ?>, 
                Hora Entrada: <?= $asistencia['hora_entrada'] ?>, 
                Hora Salida: <?= $asistencia['hora_salida'] ?> 
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $asistencia['id'] ?>">
                    <button type="submit" name="actualizar">Actualizar Salida</button>
                </form>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $asistencia['id'] ?>">
                    <button type="submit" name="eliminar">Eliminar</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
