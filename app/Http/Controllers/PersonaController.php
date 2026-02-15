<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    //listar
    public function index()
    {
        $personas = Persona::orderBy('id', 'desc')->get();
        return view('personas.index', compact('personas'));
    }

    //crear
    public function create()
    {
        return view('personas.create');
    }

    // guardar
    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required|max:15',
            'paterno' => 'required|max:50',
            'materno' => 'nullable|max:50',
            'nombre' => 'required|max:100',
            'email' => 'nullable|email'
        ]);

        Persona::create([
            'dni' => $request->dni,
            'paterno' => $request->paterno,
            'materno' => $request->materno,
            'nombre' => $request->nombre,
            'nombre_corto' => $request->nombre_corto,
            'Website' => $request->Website,
            'Twitter' => $request->Twitter,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'direccion' => $request->direccion,
            'telefono_celular' => $request->telefono_celular,
            'telefono_fijo' => $request->telefono_fijo,
            'zona' => $request->zona,
            'email' => $request->email,
            'fotografia' => $request->fotografia,
            'estado' => 'A'
        ]);

        return redirect()->route('personas.index')
            ->with('success', 'Persona registrada correctamente');
    }

    // editar
    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        return view('personas.edit', compact('persona'));
    }

    // actualizar
    public function update(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);

        $request->validate([
            'dni' => 'required|max:15',
            'paterno' => 'required|max:50',
            'nombre' => 'required|max:100'
        ]);

        $persona->update($request->all());

        return redirect()->route('personas.index')
            ->with('success', 'Persona actualizada correctamente');
    }

    //eliminar
    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();

        return redirect()->route('personas.index')
            ->with('success', 'Persona eliminada correctamente');
    }
}
