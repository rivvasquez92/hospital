@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Doctor</h1>

    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $doctor->nombre) }}" required>
        </div>

        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido', $doctor->apellido) }}" required>
        </div>

        <div class="mb-3">
            <label for="especialidad" class="form-label">Especialidad</label>
            <input type="text" class="form-control" id="especialidad" name="especialidad" value="{{ old('especialidad', $doctor->especialidad) }}" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', $doctor->telefono) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $doctor->email) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
