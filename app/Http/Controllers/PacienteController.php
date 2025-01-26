<?php

namespace App\Http\Controllers;

use App\Models\Paciente; // Asegúrate de importar el modelo
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index', compact('pacientes'));
    }

    public function create()
    {
        return view('pacientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'email' => 'required|email|unique:pacientes',
            'fecha_nacimiento' => 'required|date',
        ]);

        Paciente::create($request->all());
        return redirect()->route('pacientes.index');
    }

    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);  // Buscar el paciente por ID
        return view('pacientes.edit', compact('paciente'));  // Pasar los datos a la vista
    }
    
    public function update(Request $request, Paciente $paciente)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'fecha_nacimiento' => 'required|date',
        ]);

        $paciente->update($request->all());
        return redirect()->route('pacientes.index');
    }

    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return redirect()->route('pacientes.index')->with('success', 'Paciente actualizado correctamente');
    }
}
