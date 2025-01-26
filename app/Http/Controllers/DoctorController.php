<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    // Mostrar lista de doctores
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    // Mostrar el formulario para crear un nuevo doctor
    public function create()
    {
        return view('doctors.create');
    }

    // Guardar un nuevo doctor
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'especialidad' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'email' => 'required|email|unique:doctors,email',
        ]);

        Doctor::create($request->all());

        return redirect()->route('doctors.index')->with('success', 'Doctor creado correctamente');
    }

    // Mostrar el formulario para editar un doctor
    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    // Actualizar la información de un doctor
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'especialidad' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'email' => 'required|email|unique:doctors,email,' . $doctor->id,
        ]);

        $doctor->update($request->all());

        return redirect()->route('doctors.index')->with('success', 'Doctor actualizado correctamente');
    }

    // Eliminar un doctor
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return redirect()->route('doctors.index')->with('success', 'Doctor eliminado correctamente');
    }
}
