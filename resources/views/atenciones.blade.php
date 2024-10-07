<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atenciones del Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="my-4">Lista de Atenciones</h1>

    @if($atenciones->isEmpty())
        <p>No hay atenciones disponibles.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>Fecha</th>
                    <th>Beneficiario</th>
                    <th>EES ATENCION</th>
                    <th>TProfesional</th>
                    <th>Profesional</th>
                    <th>Diagnóstico</th>
                </tr>
            </thead>
            <tbody>
                @foreach($atenciones as $atencion)
                    <tr>
                        <td>{{ $atencion->DNI }}</td>
                        <td>{{ $atencion->Fecha }}</td>
                        <td>{{ $atencion->Beneficiario }}</td>
                        <td>{{ $atencion->{'EESS ATENCION'} }}</td>
                        <td>{{ $atencion->TProfesional }}</td>
                        <td>{{ $atencion->Profesional }}</td>
                        <td>{{ $atencion->Diagnostigo01 }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
