<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Cliente</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Registrar Nuevo Cliente</h1>
        
        <form id="clienteForm" class="mt-4">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="lugar">Lugar:</label>
                <input type="text" class="form-control" id="lugar" name="lugar" required>
            </div>
            <button type="submit" class="btn btn-primary">
                Enviar
                <!-- Spinner que aparece mientras se procesa el envío -->
                <span id="spinner" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display: none;"></span>
            </button>
        </form>

        <!-- Alerta que muestra el mensaje de respuesta -->
        <div id="alertMessage" class="alert mt-3 d-none" role="alert"></div>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.getElementById("clienteForm").addEventListener("submit", function(event) {
            event.preventDefault();

            // Mostrar el spinner
            const spinner = document.getElementById("spinner");
            spinner.style.display = "inline-block";

            // Obtener los valores de los campos
            const nombre = document.getElementById("nombre").value;
            const lugar = document.getElementById("lugar").value;

            // Configurar la solicitud AJAX
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "https://senatifer-afeybyb4gzgkf0d9.canadacentral-01.azurewebsites.net/api.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    const response = JSON.parse(xhr.responseText);
                    const alertMessage = document.getElementById("alertMessage");

                    // Ocultar el spinner
                    spinner.style.display = "none";

                    if (response.message) {
                        // Mostrar alerta de éxito
                        alertMessage.className = "alert alert-success mt-3";
                        alertMessage.textContent = response.message;
                    } else if (response.error) {
                        // Mostrar alerta de error
                        alertMessage.className = "alert alert-danger mt-3";
                        alertMessage.textContent = response.error;
                    }

                    // Mostrar la alerta y luego ocultarla después de unos segundos
                    alertMessage.classList.remove("d-none");
                    setTimeout(() => {
                        alertMessage.classList.add("d-none");
                    }, 3000);

                    // Limpiar los campos del formulario
                    document.getElementById("clienteForm").reset();
                }
            };

            // Enviar los datos
            const data = `nombre=${encodeURIComponent(nombre)}&lugar=${encodeURIComponent(lugar)}`;
            xhr.send(data);
        });
    </script>
</body>
</html>
