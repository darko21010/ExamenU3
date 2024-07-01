<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Persona;

use App\Http\Requests\CreatePersonaRequest;


class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    public function showOptions()
    {
        return view('personas.options');
    }

    public function create()
    {
        return view('personas.create');
    }

    public function store(CreatePersonaRequest $request)
    {
        Persona::create($request->validated());

        return redirect()->route('personas.index')->with('success', 'Persona creada correctamente.');
    }

    public function edit($nPerCodigo)
    {
        $persona = Persona::findOrFail($nPerCodigo);
        return view('personas.edit', compact('persona'));
    }

    public function update(CreatePersonaRequest $request, $nPerCodigo)
    {
        $persona = Persona::findOrFail($nPerCodigo);
        $persona->update($request->validated());

        return redirect()->route('personas.index')->with('success', 'Persona actualizada correctamente.');
    }
    
    public function findForEdit(Request $request)
    {
        $validated = $request->validate([
            'nPerCodigo' => 'required|integer|exists:persona,nPerCodigo',
        ]);

        return redirect()->route('personas.edit', $validated['nPerCodigo']);
    }

    public function destroy($nPerCodigo)
    {
        $persona = Persona::findOrFail($nPerCodigo);
        $persona->delete();

        return redirect()->route('personas.index')->with('success', 'Persona eliminada correctamente.');
    }
}

