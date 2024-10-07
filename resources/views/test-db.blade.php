<!DOCTYPE html>
<html>
<head>
    <title>Prueba de Conexión a la Base de Datos</title>
</head>
<body>
    <h1>Prueba de Conexión a la Base de Datos</h1>

    <h3>Usuarios:</h3>
    <table border="1">
        <thead>
            <tr>
                @if(isset($users[0]))
                    @foreach($users[0] as $key => $value)
                        <th>{{ $key }}</th>
                    @endforeach
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    @foreach ($user as $value)
                        <td>{{ $value }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
