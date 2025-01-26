@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Doctores</h1>
    
    <a href="{{ route('doctors.create') }}" class="btn btn-primary">Nuevo Doctor</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Especialidad</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($doctors as $doctor)
            <tr>
                <td>{{ $doctor->id }}</td>
                <td>{{ $doctor->nombre }}</td>
                <td>{{ $doctor->apellido }}</td>
                <td>{{ $doctor->especialidad }}</td>
                <td>{{ $doctor->telefono }}</td>
                <td>{{ $doctor->email }}</td>
                <td>
                    <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
