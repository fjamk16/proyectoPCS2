<div class="sidebar" id="sidebar">
    <a href="#">
        <i class="fas fa-home"></i>
        <span>Inicio</span>
    </a>
    <a href="#">
        <i class="fas fa-stethoscope"></i>
        <span>Servicios</span>
    </a>
    <a href="#">
        <i class="fas fa-users"></i>
        <span>Sobre Nosotros</span>
    </a>
    <a href="#">
        <i class="fas fa-phone-alt"></i>
        <span>Contacto</span>
    </a>
    <a href="#">
        <i class="fas fa-question-circle"></i>
        <span>Ayuda</span>
    </a>

    @if(Auth::check())
        @if(Auth::user()->role == 'trabajador')
            <li>Opciones para Trabajadores</li>
        @elseif(Auth::user()->role == 'gerente')
            <li>Opciones Exclusivas del Gerente</li>
        @else
            <li>Opciones para Usuarios</li>
        @endif
    @else
        <li>No estás autenticado. Por favor, inicia sesión.</li>
    @endif

    <button class="btn logout-btn" onclick="document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i>
        <span>Cerrar Sesión</span>
    </button>
    
    <!-- Formulario oculto para cerrar sesión -->
    <form id="logout-form" action="/logout" method="POST" style="display: none;">
        @csrf
    </form>
</div>