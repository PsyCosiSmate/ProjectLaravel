@extends('layouts.app')

@section('title', 'Listado de Autos')

@section('content')
    <h1>Listado de Autos</h1>
    <a href="{{ route('autos.create') }}" class="btn btn-primary mb-3">Registrar Auto</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Placa</th>
                <th>Año</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($autos as $auto)
                <tr>
                    <td>{{ $auto->id }}</td>
                    <td>{{ $auto->marca }}</td>
                    <td>{{ $auto->modelo }}</td>
                    <td>{{ $auto->placa }}</td>
                    <td>{{ $auto->anio }}</td>
                    <td>
                        <a href="{{ route('autos.show', $auto->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('autos.edit', $auto->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('autos.destroy', $auto->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
