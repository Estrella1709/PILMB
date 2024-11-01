<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function confirmUpdate(event) {
            event.preventDefault(); // Evita el envío del formulario
            const form = event.target;
            if (confirm("¿Estás seguro de que deseas actualizar los datos?")) {
                // Si el usuario confirma, envía el formulario
                form.submit();
            } else {
                // Si el usuario cancela, no hace nada
                alert("Actualización cancelada.");
            }
        }

        function confirmDelete(event) {
            event.preventDefault(); // Evita el envío del formulario
            if (confirm("¿Estás seguro de que deseas eliminar tu perfil? Esta acción no se puede deshacer.")) {
                // Si el usuario confirma, redirige a la URL de eliminación
                window.location.href = event.target.href;
            } else {
                // Si el usuario cancela, no hace nada
                alert("Eliminación cancelada.");
            }
        }
    </script>
</head>

<body>
<header id="header" class="alt">
    <div class="logo">
        <a href="/">Project <span>MENTAL BALANCE</span></a>
    </div>
    @if(session('logged_in'))
        <a href="#menu">Menu</a>
    @else
        <a class="button" href="#">INICIAR SESION</a>
    @endif
</header>

@if(session('logged_in'))
<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">TEST</a></li>
        <li><a href="#">DIRECTORIO</a></li>
        <li><a href="#" class="nav-link text-white">SALIR</a></li>
    </ul>
</nav>
@endif

@php
    $messages = session('messages');
@endphp

@if($messages)
    @foreach($messages as $message)
        <div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforeach
@endif

<div class="container mt-4">
    <!-- Contenedor del formulario -->
    <div class="container-lg p-3 border-primary border-opacity-75 rounded-4 container-custom">
        <h2 class="text-center fs-2 text-black fw-semibold">Perfil de Paciente</h2>
        <form action="#" method="post" onsubmit="confirmUpdate(event)">
            @csrf
            <div class="mb-3 form-group-custom">
                <label for="txtNombre" class="form-label">Nombre</label>
                <input type="text" class="form-control border-primary border-opacity-75 rounded" id="txtNombre" name="txtNombre" value="">
            </div>
            <div class="mb-3 form-group-custom">
                <label for="txtApellidoPaterno" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control border-primary border-opacity-75 rounded" id="txtApellidoPaterno" name="txtApellidoPaterno" value="">
            </div>
            <div class="mb-3 form-group-custom">
                <label for="txtApellidoMaterno" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control border-primary border-opacity-75 rounded" id="txtApellidoMaterno" name="txtApellidoMaterno" value="">
            </div>
            <div class="mb-3 form-group-custom">
                <label for="txtGenero" class="form-label">Género</label>
                <input type="text" class="form-control border-primary border-opacity-75 rounded" id="txtGenero" name="txtGenero" value="">
            </div>
            <div class="mb-3 form-group-custom">
                <label for="txtFechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control border-primary border-opacity-75 rounded" id="txtFechaNacimiento" name="txtFechaNacimiento" value="">
            </div>
            <div class="mb-3 form-group-custom">
                <label for="txtTelefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control border-primary border-opacity-75 rounded" id="txtTelefono" name="txtTelefono" value="">
            </div>
            <div class="mb-3 form-group-custom">
                <label for="txtEmail" class="form-label">Email</label>
                <input type="email" class="form-control border-primary border-opacity-75 rounded" id="txtEmail" name="txtEmail" value="">
            </div>
            <div class="mb-3 form-group-custom">
                <label for="txtPassword" class="form-label">Contraseña</label>
                <input type="password" class="form-control border-primary border-opacity-75 rounded" id="txtPassword" name="txtPassword" value="">
            </div>
            <div class="d-flex justify-content-center button-container">
                <button type="submit" class="button">Actualizar</button>
                <a href="#" class="button" onclick="confirmDelete(event)">Eliminar Perfil</a>
            </div>
        </form>
    </div>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
<script src="{{ asset('js/skel.min.js') }}"></script>
<script src="{{ asset('js/util.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
