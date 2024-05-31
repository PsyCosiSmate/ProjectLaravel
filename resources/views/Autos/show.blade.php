@extends('layouts.app')

@section('title', 'Detalles del Auto')

@section('content')
    <div class="container mt-5">
        <h1>Detalles del Auto</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $auto->marca }} {{ $auto->modelo }}</h5>
                <p class="card-text"><strong>Placa:</strong> {{ $auto->placa }}</p>
                <p class="card-text"><strong>Año:</strong> {{ $auto->anio }}</p>
                <p class="card-text"><strong>Kilometraje:</strong> {{ $auto->kilometraje }}</p>
                <p class="card-text"><strong>Tipo de Combustible:</strong> {{ $auto->tipo_combustible }}</p>
                <p class="card-text"><strong>Precio:</strong> ${{ $auto->precio }}</p>
                <p class="card-text"><strong>Transmisión:</strong> {{ $auto->transmision }}</p>
                <p class="card-text"><strong>Descripción:</strong> {{ $auto->descripcion }}</p>
                <a href="{{ route('autos.index') }}" class="btn btn-primary">Volver al Listado</a>
            </div>
        </div>
    </div>
@endsection
