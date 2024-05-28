@extends('layouts.app')

@section('title', 'Registrar Auto')

@section('content')
    <h1>Registrar Auto</h1>
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
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
