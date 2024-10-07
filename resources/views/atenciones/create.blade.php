{{-- resources/views/atenciones/create.blade.php --}}
@extends('layouts.app')

@section('title', 'Crear Nueva Atención')

@section('content')
    <h1>Crear Nueva Atención</h1>

    {{-- Mostrar errores de validación, si los hay --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulario para crear una nueva atención --}}
    <form action="{{ route('atenciones.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="DNI">DNI:</label>
            <input type="text" name="DNI" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Fecha">Fecha:</label>
            <input type="date" name="Fecha" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Beneficiario">Beneficiario:</label>
            <input type="text" name="Beneficiario" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="EESS ATENCION">EESS ATENCIÓN:</label>
            <input type="text" name="EESS ATENCION" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="TProfesional">TProfesional:</label>
            <input type="text" name="TProfesional" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Profesional">Profesional:</label>
            <input type="text" name="Profesional" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Diagnostico01">Diagnóstico:</label>
            <input type="text" name="Diagnostico01" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Crear Atención</button>
    </form>
@endsection
