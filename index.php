<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: white;
    padding: 20px;
    text-align: center;
}

nav ul {
    list-style-type: none;
    margin: 0;
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

.room-container {
    display: flex;
    justify-content: space-around;
    margin: 20px;
}

.room {
    text-align: center;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px;
    position: fixed;
    width: 100%;
    bottom: 0;
}

</style>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel SENATI</title>
    <link rel="stylesheet" href="styles.css">
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
            </ul>
        </nav>
        <h1>Bienvenidos al Hotel SENATI</h1>
    </header>

    <section id="inicio" class="banner">
        <h2>El lugar ideal para tu descanso</h2>
        <p>Disfruta de una estadía inolvidable con todas las comodidades que ofrecemos.</p>
        <a href="#reservar" class="btn">Reserva ahora</a>
    </section>

    <section id="habitaciones">
        <h2>Nuestras Habitaciones</h2>
        <div class="room-container">
            <div class="room">
                <img src="room1.jpg" alt="Habitación estándar">
                <h3>Habitación Estándar</h3>
                <p>A partir de $100 por noche</p>
            </div>
            <div class="room">
                <img src="room2.jpg" alt="Habitación de lujo">
                <h3>Habitación de Lujo</h3>
                <p>A partir de $200 por noche</p>
            </div>
        </div>
    </section>

    <section id="servicios">
        <h2>Servicios</h2>
        <ul>
            <li>Desayuno incluido</li>
            <li>Piscina</li>
            <li>Gimnasio</li>
            <li>Spa y masajes</li>
        </ul>
    </section>

    <section id="ubicacion">
        <h2>Ubicación</h2>
        <p>Estamos ubicados en el centro de la ciudad, cerca de todas las atracciones turísticas.</p>
        <div id="map">
            <!-- Aquí puedes insertar un mapa interactivo -->
        </div>
    </section>

    <section id="contacto">
        <h2>Contáctanos</h2>
        <form id="contactForm">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Hotel Ejemplo. Todos los derechos reservados.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Formulario enviado. Nos pondremos en contacto contigo pronto.');
});

</script>