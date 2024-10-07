<h2>Información para trabajadores</h2>
<p>Aquí puedes agregar, editar o eliminar atenciones.</p>
<!-- Botón para crear nueva atención -->
<a href="{{ route('atenciones.create') }}" class="btn btn-primary">Crear Nueva Atención</a>
<br>
<br>
<!-- Tabla de atenciones similar a la de usuarios -->
@if(!empty($atenciones))
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Fecha</th>
                <th>Beneficiario</th>
                <th>EESS ATENCION</th>
                <th>TProfesional</th>
                <th>Profesional</th>
                <th>Diagnóstico</th>
                <th>Acciones</th> <!-- Nueva columna para acciones -->
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
                    <td>{{ $atencion->Diagnostico01 }}</td>
                    <td>
                        <a href="{{ route('atenciones.edit', $atencion->DNI) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('atenciones.delete', $atencion->DNI) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Incluir el paginador desde el layout --}}
    @include('layouts.pagination', ['paginator' => $atenciones])
@else
    <p>No hay atenciones disponibles.</p>
@endif
