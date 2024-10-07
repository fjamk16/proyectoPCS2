@extends('layouts.app')

@section('title', 'Editar Atención')

@section('content')
    <h2>Editar Atención</h2>
    <form action="{{ route('atenciones.update', $atencion->DNI) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="DNI">DNI</label>
            <input type="text" name="DNI" id="DNI" class="form-control" value="{{ $atencion->DNI }}" required>
        </div>
        <div class="form-group">
            <label for="Fecha">Fecha</label>
            <input type="date" name="Fecha" id="Fecha" class="form-control" value="{{ $atencion->Fecha }}" required>
        </div>
        <div class="form-group">
            <label for="Beneficiario">Beneficiario</label>
            <input type="text" name="Beneficiario" id="Beneficiario" class="form-control" value="{{ $atencion->Beneficiario }}" required>
        </div>
        {{-- Agrega más campos según sea necesario --}}
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
