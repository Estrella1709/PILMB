@extends('layouts.plantilla')

@section('body')
    <div class="container">
        <div class="results-container mt-5 p-4 border border-opacity-50 rounded" style="background-color: #f9f9f9;">
            <h2 class="text-center mb-4">Resultados del Test</h2>
            <div class="form-group mb-3">
                <label for="result1">Respuesta 1:</label>
                <input type="text" class="form-control" id="result1" readonly>
            </div>
            <div class="form-group mb-3">
                <label for="result2">Respuesta 2:</label>
                <input type="text" class="form-control" id="result2" readonly>
            </div>
            <a href="{{ url('/test') }}" class="btn btn-primary btn-block mt-3">Volver al Test</a>
        </div>
    </div>

    <!-- Scripts necesarios -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const result1 = localStorage.getItem('result1');
            const result2 = localStorage.getItem('result2');
            
            if (result1) document.getElementById('result1').value = result1;
            if (result2) document.getElementById('result2').value = result2;
        });
    </script>
@endsection
