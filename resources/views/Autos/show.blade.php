@extends('layouts.app')

@section('title', 'Detalles del Auto')

@section('content')
    <h1>Detalles del Auto</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $auto->marca }} {{ $auto->modelo }}</h5>
            <p class="card-text"><strong>Placa:</strong> {{ $auto->placa }}</p>
            <p class="card-text"><strong>Año:</strong> {{ $auto->anio }}</p>
            <a href="{{ route('autos.index') }}" class="btn btn-primary">Volver al listado</a>
        </div>
    </div>
@endsection
