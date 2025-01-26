@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Pacientes</h1>
    <a href="{{ route('pacientes.create') }}" class="btn btn-primary mb-3">Nuevo Paciente</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->nombre }}</td>
                <td>{{ $paciente->apellido }}</td>
                <td>{{ $paciente->telefono }}</td>
                <td>{{ $paciente->email }}</td>
                <td>
                    <a href="{{ route('pacientes.edit', $paciente) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('pacientes.destroy', $paciente) }}" method="POST" style="display:inline;">
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
