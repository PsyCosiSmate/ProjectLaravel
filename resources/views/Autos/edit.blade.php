@extends('layouts.app')

@section('title', 'Editar Auto')

@section('content')
    <h1>Editar Auto</h1>
    <form action="{{ route('autos.update', $auto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca" value="{{ $auto->marca }}" required>
        </div>
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="modelo" name="modelo" value="{{ $auto->modelo }}" required>
        </div>
        <div class="mb-3">
            <label for="placa" class="form-label">Placa</label>
            <input type="text" class="form-control" id="placa" name="placa" value="{{ $auto->placa }}" required>
        </div>
        <div class="mb-3">
            <label for="anio" class="form-label">Año</label>
            <input type="number" class="form-control" id="anio" name="anio" value="{{ $auto->anio }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
