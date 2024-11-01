<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Médico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body class="bg-dark.bg-gradient">
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

    @if (session('message'))
        <div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
            <strong>{{ session('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container-lg mt-2 mb-5 w-75 p-3 border-opacity-75 rounded-4 container-custom">
        <label for="formGroupExampleInput" class="form-label fs-2 text-white fw-semibold form-label-custom text-center">Registro</label>
    <form action="#" method="post">
            @csrf
            <div class="row">
                <!-- Primera columna -->
                <div class="col-md-4 mb-3">
                    <div class="form-group-custom">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control border-primary border-opacity-75 rounded" id="txtNombre" name="txtNombre" required>
                    </div>
                    <div class="form-group-custom">
                        <label for="txtApellidoPaterno" class="form-label">Apellido paterno</label>
                        <input type="text" class="form-control border-primary border-opacity-75 rounded" id="txtApellidoPaterno" name="txtApellidoPaterno" required>
                    </div>
                    <div class="form-group-custom">
                        <label for="txtFechaNacimiento" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control border-primary border-opacity-75 rounded" id="txtFechaNacimiento" name="txtFechaNacimiento" required>
                    </div>
                    <div class="form-group-custom">
                        <label for="txtEspecialidad" class="form-label">Especialidad</label>
                        <input type="text" class="form-control border-primary border-opacity-75 rounded" id="txtEspecialidad" name="txtEspecialidad" required>
                    </div>
                </div>

                <!-- Segunda columna -->
                <div class="col-md-4 mb-3">
                    <div class="form-group-custom">
                        <label for="txtApellidoMaterno" class="form-label">Apellido materno</label>
                        <input type="text" class="form-control border-primary border-opacity-75 rounded" id="txtApellidoMaterno" name="txtApellidoMaterno" required>
                    </div>
                    <div class="form-group-custom">
                        <label for="txtGenero" class="form-label">Género</label>
                        <input type="text" class="form-control border-primary border-opacity-75 rounded" id="txtGenero" name="txtGenero" required>
                    </div>
                    <div class="form-group-custom">
                        <label for="txtTelefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control border-primary border-opacity-75 rounded" id="txtTelefono" name="txtTelefono" required>
                    </div>
                    <div class="form-group-custom">
                        <label for="txtDescripcionEspecialidad" class="form-label">Descripción especialidad</label>
                        <input type="text" class="form-control border-primary border-opacity-75 rounded" id="txtDescripcionEspecialidad" name="txtDescripcionEspecialidad" required>
                    </div>
                </div>

                <!-- Tercera columna -->
                <div class="col-md-4 mb-3">
                    <div class="form-group-custom">
                        <label for="txtEmail" class="form-label">Email</label>
                        <input type="text" class="form-control border-primary border-opacity-75 rounded" id="txtEmail" name="txtEmail" required>
                    </div>
                    <div class="form-group-custom">
                        <label for="txtCedula" class="form-label">Cédula</label>
                        <input type="text" class="form-control border-primary border-opacity-75 rounded" id="txtCedula" name="txtCedula" required>
                    </div>
                    <div class="form-group-custom">
                        <label for="txtPassword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control border-primary border-opacity-75 rounded" id="txtPassword" name="txtPassword" required>
                    </div>
                </div>
            </div>
            <!-- Contenedor para el botón de enviar -->
            <div class="button-container text-center mt-4">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
