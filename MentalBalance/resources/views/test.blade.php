<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/cssinicioS.css') }}">
    <link rel="stylesheet" href="{{ asset('css/testv2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <header id="header" class="alt">
        <div class="logo">
            <a href="#">Project <span>MENTAL BALANCE</span></a>
        </div>
        @if (session('logged_in'))
            <a href="#menu">Menu</a>
        @else
            <a class="button" href="#">INICIAR SESION</a>
        @endif
    </header>
    
    @if (session('logged_in'))
    <!-- Nav -->
    <nav id="menu">
        <ul class="links">
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ route('test') }}">TEST</a></li>
            <li><a href="{{ route('directorio') }}">DIRECTORIO</a></li>
            <li><a href="{{ route('perfil') }}">PERFIL</a></li>
            <li><a href="{{ route('logout') }}" class="nav-link text-white">SALIR</a></li>
        </ul>
    </nav>
    @endif
    
    <div class="container mt-5 mb-5 p-3 border-opacity-75 rounded-4" style="background-color: #ffffff;">
        <h1 class="text-center mb-4" style="color: #2c387e;">Formulario de Salud Mental</h1>
        <form id="formulario">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control border-primary border-opacity-75 rounded" id="nombre" name="nombre" required>
                <span class="error-message" id="error-nombre" style="color: #ff0000;">Solo se permiten letras.</span>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control border-primary border-opacity-75 rounded" id="email" name="email" required>
                <span class="error-message" id="error-email" style="color: #ff0000;">El correo debe contener '@' y terminar en '.com'.</span>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono Celular</label>
                <input type="tel" class="form-control border-primary border-opacity-75 rounded" id="telefono" name="telefono" required maxlength="10">
                <span class="error-message" id="error-telefono" style="color: #ff0000;">Solo se permiten 10 números.</span>
                <div class="character-count" id="contador-telefono">0/10</div>
            </div>

            <!-- Preguntas del formulario -->
            @for ($i = 1; $i <= 10; $i++)
                <div class="mb-3">
                    <label for="pregunta{{ $i }}" class="form-label">Pregunta {{ $i }}</label>
                    <select class="form-select border-primary border-opacity-75 rounded" id="pregunta{{ $i }}" name="pregunta{{ $i }}" required>
                        <option value="1">1 - Nunca</option>
                        <option value="2">2 - Raramente</option>
                        <option value="3">3 - A veces</option>
                        <option value="4">4 - Frecuentemente</option>
                        <option value="5">5 - Siempre</option>
                    </select>
                </div>
            @endfor

            <div class="text-center">
                <button type="submit" class="btn text-white" style="background-color: #2c387e;">Enviar</button>
            </div>
        </form>

        <div id="resultado" class="mt-4"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const nombreInput = document.getElementById('nombre');
            const emailInput = document.getElementById('email');
            const telefonoInput = document.getElementById('telefono');
            const errorNombre = document.getElementById('error-nombre');
            const errorEmail = document.getElementById('error-email');
            const errorTelefono = document.getElementById('error-telefono');
            const contadorTelefono = document.getElementById('contador-telefono');
            const formulario = document.getElementById('formulario');
            const resultadoDiv = document.getElementById('resultado');

            nombreInput.addEventListener('input', function () {
                const regexNombre = /^[A-Za-záéíóúÁÉÍÓÚñÑ\s]+$/;
                errorNombre.style.display = regexNombre.test(nombreInput.value) ? 'none' : 'block';
                nombreInput.classList.toggle('invalid', !regexNombre.test(nombreInput.value));
                nombreInput.classList.toggle('valid', regexNombre.test(nombreInput.value));
            });

            emailInput.addEventListener('input', function () {
                const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                const isValid = regexEmail.test(emailInput.value) && emailInput.value.endsWith('.com');
                errorEmail.style.display = isValid ? 'none' : 'block';
                emailInput.classList.toggle('invalid', !isValid);
                emailInput.classList.toggle('valid', isValid);
            });

            telefonoInput.addEventListener('input', function () {
                const regexTelefono = /^[0-9]*$/;
                const isValid = regexTelefono.test(telefonoInput.value) && telefonoInput.value.length === 10;
                errorTelefono.style.display = isValid ? 'none' : 'block';
                telefonoInput.classList.toggle('invalid', !isValid);
                telefonoInput.classList.toggle('valid', isValid);
                contadorTelefono.textContent = `${telefonoInput.value.length}/10`;
            });

            formulario.addEventListener('submit', function (event) {
                event.preventDefault();
                if (document.querySelectorAll('.invalid').length) {
                    alert('Por favor, corrija los errores antes de enviar el formulario.');
                    return;
                }

                const respuestas = Array.from(formulario.querySelectorAll('select')).map(select => parseInt(select.value));
                const suma = respuestas.reduce((a, b) => a + b, 0);
                let mensaje = '';

                if (suma <= 20) {
                    mensaje = '<div class="alert alert-success" role="alert">No parece que tengas síntomas significativos de estrés o ansiedad.</div>';
                } else if (suma <= 30) {
                    mensaje = '<div class="alert alert-warning" role="alert">Podrías estar experimentando algunos síntomas de estrés o ansiedad. Considera hablar con un profesional.</div>';
                } else {
                    mensaje = '<div class="alert alert-danger" role="alert">Tus respuestas indican que podrías estar experimentando un alto nivel de estrés o ansiedad. Es recomendable buscar ayuda profesional.</div>';
                }

                resultadoDiv.innerHTML = mensaje;
            });
        });
    </script>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
    <script src="{{ asset('js/skel.min.js') }}"></script>
    <script src="{{ asset('js/util.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
