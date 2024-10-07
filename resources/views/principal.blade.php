@extends('layouts.app')

@section('title', 'Página Principal')

@section('content')
    <h1>Hola</h1>

    @if(Auth::check())
        @if(Auth::user()->role == 'trabajador')
            @include('tabs.trabajador') {{-- Incluyendo la vista para trabajadores --}}
        @elseif(Auth::user()->role == 'gerente')
            @include('tabs.gerente')
        @else
            <p>Bienvenido usuario, aquí está tu información</p>
            @include('tabs.tabla_usuario', ['atenciones' => $atenciones]) {{-- Incluyendo la vista para usuarios --}}
        @endif
    @else
        <p>No estás autenticado. Por favor, inicia sesión.</p>
    @endif
@endsection
