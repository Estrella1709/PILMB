<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjectMentalBalance</title>
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

<div class="container mt-5 d-flex flex-column align-items-center">
    <div class="card p-4" style="width: 100%; max-width: 600px;">
        <div class="d-flex justify-content-center mb-3">
            <a href="#" class="btn btn-custom mx-3">Profesional</a>
            <a href="#" class="btn btn-custom mx-3">Paciente</a>
        </div>
        <div class="d-flex justify-content-center">
            <p class="legend mx-3">"Regístrate como profesional para añadirte a un directorio y que los usuarios puedan contactarte si así lo desean, también para poder agregar tus propias preguntas"</p>
            <p class="legend mx-3">"Regístrate como paciente para poder hacer el test de prediagnóstico y te puedas poner en contacto con cualquiera de los profesionales registrados"</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
