<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel SENATI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        .banner {
            background-image: url('hotel.jpg');
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .banner h2 {
            font-size: 48px;
        }

        footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .room-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .room {
            margin: 20px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#habitaciones">Habitaciones</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#ubicacion">Ubicación</a></li>
                <li><a href="#contacto">Contacto</a></li>
                <li><a href="cliente.php">Cliente</a></li>
            </ul>
        </nav>
        <h1>Bienvenidos al Hotel SENATI</h1>
    </header>

    <section id="inicio" class="banner">
        <h2>El lugar ideal para tu descanso</h2>
        <p>Disfruta de una estadía inolvidable con todas las comodidades que ofrecemos.</p>
        <a href="#reservar" class="btn btn-light">Reserva ahora</a>
    </section>

    <section id="habitaciones" class="container mt-5">
        <h2>Nuestras Habitaciones</h2>
        <div class="room-container row">
            <div class="room col-md-4">
                <div class="card">
                    <img src="room1.jpg" class="card-img-top" alt="Habitación estándar">
                    <div class="card-body">
                        <h5 class="card-title">Habitación Estándar</h5>
                        <p class="card-text">A partir de $100 por noche</p>
                    </div>
                </div>
            </div>
            <div class="room col-md-4">
                <div class="card">
                    <img src="room2.jpg" class="card-img-top" alt="Habitación de lujo">
                    <div class="card-body">
                        <h5 class="card-title">Habitación de Lujo</h5>
                        <p class="card-text">A partir de $200 por noche</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios" class="container mt-5">
        <h2>Servicios</h2>
        <ul class="list-group">
            <li class="list-group-item">Desayuno incluido</li>
            <li class="list-group-item">Piscina</li>
            <li class="list-group-item">Gimnasio</li>
            <li class="list-group-item">Spa y masajes</li>
        </ul>
    </section>

    <section id="ubicacion" class="container mt-5">
        <h2>Ubicación</h2>
        <p>Estamos ubicados en el centro de la ciudad, cerca de todas las atracciones turísticas.</p>
        <div id="map">
            <!-- Aquí puedes insertar un mapa interactivo -->
        </div>
    </section>

    <section id="contacto" class="container mt-5">
        <h2>Contáctanos</h2>
        <form id="contactForm">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Hotel SENATI. Todos los derechos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Formulario enviado. Nos pondremos en contacto contigo pronto.');
        });
    </script>
</body>
</html>
