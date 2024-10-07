<h2>Atenciones</h2>
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
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Incluir el paginador desde el layout --}}
    @include('layouts.pagination', ['paginator' => $atenciones])
@else
    <p>No hay atenciones disponibles.</p>
@endif
