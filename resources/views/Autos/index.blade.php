@extends('layouts.app')

@section('title', 'Listado de Autos')

@section('content')
    <div class="container mt-5">
        <h1>Listado de Autos</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('autos.create') }}" class="btn btn-primary mb-3">Registrar Nuevo Auto</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Placa</th>
                    <th>Año</th>
                    <th>Kilometraje</th>
                    <th>Tipo de Combustible</th>
                    <th>Precio Nuevo</th>
                    <th>Precio Usado</th>
                    <th>Transmisión</th>
                     <th>Imagen</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($autos as $auto)
                    <tr>
                        <td>{{ $auto->marca }}</td>
                        <td>{{ $auto->modelo }}</td>
                        <td>{{ $auto->placa }}</td>
                        <td>{{ $auto->anio }}</td>
                        <td>{{ $auto->kilometraje }}</td>
                        <td>{{ $auto->tipo_combustible }}</td>
                        <td>{{ $auto->precio_nuevo }}</td>
                        <td>{{ $auto->precio_usado }}</td>
                        <td>{{ $auto->transmision }}</td>
                         <td>{{ $auto->imagen }}</td>
                        <td>{{ $auto->descripcion }}</td>
                        <td>
                            <a href="{{ route('autos.show', $auto->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('autos.edit', $auto->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('autos.destroy', $auto->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
