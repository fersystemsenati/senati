<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Clientes</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Registro de Clientes</h2>
    
    <div class="card mb-4">
        <div class="card-body">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="lugar">Lugar:</label>
                    <input type="text" class="form-control" name="lugar" required>
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>

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
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Manejo del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $lugar = $_POST['lugar'];

        // Insertar datos en la tabla cliente
        $sql_insert = "INSERT INTO cliente (nombre, lugar) VALUES ('$nombre', '$lugar')";
        if ($conn->query($sql_insert) === TRUE) {
            echo "<div class='alert alert-success'>Nuevo registro creado exitosamente.</div>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $sql_insert . "<br>" . $conn->error . "</div>";
        }
    }

    // Consulta para obtener datos de la tabla cliente
    $sql = "SELECT id, nombre, lugar FROM cliente";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar los datos en una tabla
        echo "<h2 class='mt-4'>Lista de Clientes</h2>
              <table class='table table-striped'>
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Lugar</th>
                  </tr>
              </thead>
              <tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["nombre"] . "</td>
                    <td>" . $row["lugar"] . "</td>
                  </tr>";
        }
        echo "</tbody>
              </table>";
    } else {
        echo "<div class='alert alert-warning'>0 resultados</div>";
    }

    // Cerrar conexión
    $conn->close();
    ?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
