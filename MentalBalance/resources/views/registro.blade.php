<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Project Mental Balance</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Nav items here if needed -->
            </ul>
        </div>
    </div>
</nav>

<div class="container-lg mt-2 mb-5 w-75 p-3 border-opacity-75 rounded-4 container-custom">
    <h2>Registro de Pacientes</h2>
    <form action="#" method="POST">
        @csrf
        <div class="row">
            <!-- Columna izquierda -->
            <div class="col-md-6">
                <div class="mb-3 form-group-custom">
                    <label for="txtNombre" class="form-label">Nombre</label>
                    <input type="text" id="txtNombre" name="txtNombre" class="form-control border-primary border-opacity-75 rounded" required>
                </div>
                <div class="mb-3 form-group-custom">
                    <label for="txtApellidoPaterno" class="form-label">Apellido Paterno</label>
                    <input type="text" id="txtApellidoPaterno" name="txtApellidoPaterno" class="form-control border-primary border-opacity-75 rounded" required>
                </div>
                <div class="mb-3 form-group-custom">
                    <label for="txtApellidoMaterno" class="form-label">Apellido Materno</label>
                    <input type="text" id="txtApellidoMaterno" name="txtApellidoMaterno" class="form-control border-primary border-opacity-75 rounded" required>
                </div>
                <div class="mb-3 form-group-custom">
                    <label for="txtFechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" id="txtFechaNacimiento" name="txtFechaNacimiento" class="form-control border-primary border-opacity-75 rounded" required>
                </div>
                <div class="mb-3 form-group-custom">
                    <label for="txtUsuario" class="form-label">Usuario</label>
                    <input type="text" id="txtUsuario" name="txtUsuario" class="form-control border-primary border-opacity-75 rounded" required>
                </div>
            </div>
            <!-- Columna derecha -->
            <div class="col-md-6">
                <div class="mb-3 form-group-custom">
                    <label for="txtGenero" class="form-label">Género</label>
                    <select id="txtGenero" name="txtGenero" class="form-select border-primary border-opacity-75 rounded" required>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
                <div class="mb-3 form-group-custom">
                    <label for="txtTelefono" class="form-label">Teléfono</label>
                    <input type="text" id="txtTelefono" name="txtTelefono" class="form-control border-primary border-opacity-75 rounded" required>
                </div>
                <div class="mb-3 form-group-custom">
                    <label for="txtEmail" class="form-label">Correo Electrónico</label>
                    <input type="email" id="txtEmail" name="txtEmail" class="form-control border-primary border-opacity-75 rounded" required>
                </div>
                <div class="mb-3 form-group-custom">
                    <label for="txtPassword" class="form-label">Contraseña</label>
                    <input type="password" id="txtPassword" name="txtPassword" class="form-control border-primary border-opacity-75 rounded" required>
                </div>
                <div class="mb-3 button-container">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>
    </form>

    @if (session('message'))
        <div class="alert alert-warning mt-3" role="alert">
            {{ session('message') }}
        </div>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
