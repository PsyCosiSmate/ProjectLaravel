@extends('layouts.app')

@section('title', 'Registrar Auto')

@section('content')
    <div class="container mt-5">
        <h1>Registrar Auto</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('autos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" required>
            </div>
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="modelo" name="modelo" required>
            </div>
            <div class="mb-3">
                <label for="placa" class="form-label">Placa</label>
                <input type="text" class="form-control" id="placa" name="placa" required>
            </div>
            <div class="mb-3">
                <label for="anio" class="form-label">Año</label>
                <input type="number" class="form-control" id="anio" name="anio" required>
            </div>
            <div class="mb-3">
                <label for="kilometraje" class="form-label">Kilometraje</label>
                <input type="number" class="form-control" id="kilometraje" name="kilometraje" required>
            </div>
            <div class="mb-3">
                <label for="tipo_combustible" class="form-label">Tipo de Combustible</label>
                <input type="text" class="form-control" id="tipo_combustible" name="tipo_combustible" required>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
            </div>
            <div class="mb-3">
                <label for="transmision" class="form-label">Transmisión</label>
                <input type="text" class="form-control" id="transmision" name="transmision" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
@endsection
