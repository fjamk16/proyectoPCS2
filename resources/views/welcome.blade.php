<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posta de San Ramón</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Agregar padding al body para que el contenido no quede oculto por el navbar fijo */
        body {
            padding-top: 80px;
        }
    </style>
</head>
<body>
    <!-- Navbar fijo -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Posta de San Ramón</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre-nosotros">Sobre nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>

                <!-- Select para contacto y horario de atención -->
                <div class="d-flex align-items-center">
                    <select id="infoSelect" class="form-select me-3">
                        <option value="">Selecciona información</option>
                        <option value="contacto">Contacto</option>
                        <option value="horario">Horario de Atención</option>
                    </select>
                </div>

                <!-- Botón de Iniciar Sesión -->
                <a class="btn btn-primary" href="/login">Iniciar Sesión</a>
            </div>
        </div>
    </nav>

    <!-- Encabezado -->
    <header id="inicio" class="bg-primary text-white text-center p-4" style="background-image: url('/imagenes/bienvenidos_web.jpg'); background-size: cover; background-position: center;">
        <h1>Posta de San Ramón</h1>
        <p>Atendiendo con calidad y calidez</p>
    </header>

    <!-- Sección de Servicios -->
    <main class="container my-5">
        <section id="servicios" class="text-center">
            <h2>Nuestros Servicios</h2>
            <p>Nos dedicamos a cuidar su salud con los mejores especialistas y tecnología de punta.</p>

            <div class="row my-4">
                <div class="col-md-4">
                    <h3>Consultas Médicas</h3>
                    <p>Especialistas en diversas áreas listos para atenderte.</p>
                </div>
                <div class="col-md-4">
                    <h3>Emergencias</h3>
                    <p>Atención de emergencias 24/7 con los mejores equipos.</p>
                </div>
                <div class="col-md-4">
                    <h3>Tabajadores Especialisados</h3>
                    <p>Equipo de profesionales preparados.</p>
                </div>
            </div>
        </section>

        <!-- Sección de Sobre Nosotros -->
        <section id="sobre-nosotros" class="text-center my-5">
            <h2>Sobre Nosotros</h2>
            <p>Posta de San Ramón es una institución comprometida con el bienestar de la comunidad, proporcionando atención médica de calidad.</p>
        </section>

        <!-- Sección de Contacto -->
        <section id="contacto" class="text-center my-5">
            <h2>Contacto</h2>
            <p id="contacto-info">Ubicación: Avenida Central 1234, Ciudad<br>
               Teléfono: +123 456 7890<br>
               Correo: info@PostaSanRamón.com
            </p>
        </section>

        <!-- Información adicional según el select -->
        <section id="informacion-adicional" class="text-center my-5" style="display: none;">
            <h2 id="titulo-adicional"></h2>
            <p id="contenido-adicional"></p>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-light text-center p-3">
        <p>&copy; 2024 Posta de San Ramón. Todos los derechos reservados.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('infoSelect').addEventListener('change', function() {
            var valor = this.value;
            var tituloAdicional = document.getElementById('titulo-adicional');
            var contenidoAdicional = document.getElementById('contenido-adicional');
            var seccionAdicional = document.getElementById('informacion-adicional');

            if (valor === 'contacto') {
                tituloAdicional.innerText = 'Información de Contacto';
                contenidoAdicional.innerHTML = 'Teléfono: +123 456 7890<br>Correo: info@PostaSanRamón.com<br>Ubicación: Avenida Central 1234, Ciudad';
                seccionAdicional.style.display = 'block';
            } else if (valor === 'horario') {
                tituloAdicional.innerText = 'Horario de Atención';
                contenidoAdicional.innerHTML = 'Lunes a Viernes: 8:00 AM - 6:00 PM<br>Sábado: 9:00 AM - 1:00 PM<br>Domingo: Cerrado';
                seccionAdicional.style.display = 'block';
            } else {
                seccionAdicional.style.display = 'none';
            }
        });
    </script>
</body>
</html>
