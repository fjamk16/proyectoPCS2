<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .bg-image {
            background-image: url('/imagenes/7bf15e02-2d3f-4081-9b2b-6e359e7b58ac.jpg');
            background-size: cover;
            background-position: center;
            height: 100%;
            position: relative;
        }

        .bg-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .login-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 400px;
            padding: 50px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 20px;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 20px;
            width: 100%;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Imagen de fondo -->
    <div class="bg-image">
        <!-- Contenedor del login -->
        <div class="login-container">
            <h2>Iniciar Sesión</h2>
            <form action="/login" method="POST">
                <!-- Token de seguridad para Laravel -->
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-custom">Iniciar Sesión</button>
                </div>

                <!-- Mostrar errores si existen -->
                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        {{ $errors->first('msg') }}
                    </div>
                @endif
            </form>
        </div>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
