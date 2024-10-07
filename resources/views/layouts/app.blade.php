<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .sidebar {
            height: 100vh;
            width: 70px; /* Tamaño del sidebar cuando está colapsado */
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
            transition: all 0.3s;
        }

        .sidebar:hover {
            width: 250px; /* Tamaño cuando se expande */
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: flex;
            align-items: center;
            transition: all 0.3s;
        }

        .sidebar a i {
            margin-right: 10px;
            min-width: 30px;
        }

        .sidebar a span {
            visibility: hidden; /* Ocultar el texto inicialmente */
            opacity: 0;
            transition: visibility 0.3s, opacity 0.3s;
        }

        .sidebar:hover a span {
            visibility: visible; /* Mostrar el texto cuando se expanda el sidebar */
            opacity: 1;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            margin-left: 70px; /* Tamaño del sidebar colapsado */
            padding: 20px;
            transition: all 0.3s;
        }

        .sidebar:hover + .content {
            margin-left: 250px; /* Ajustar margen cuando el sidebar esté expandido */
        }

        .logout-btn {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Contenido principal -->
    <div class="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
