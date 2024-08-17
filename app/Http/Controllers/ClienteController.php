<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\CreateClienteRequest;

class ClienteController extends Controller
{
    public function index() // listado de personas
    {
        $cliente = Cliente::all();
        return view('clientes.index', compact('cliente'));
    }

    public function showOptions()//menu de opciones
    {
        return view('clientes.options');
    }

    public function create()// crear o agregar nueva persona
    {
        return view('clientes.create');
    }

    public function store(CreateClienteRequest $request)
    {
        Cliente::create($request->validated());
        return redirect()->route('clientes.index')->with('success', 'Cliente creado correctamente.');
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(CreateClienteRequest $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->validated());
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente.');
    }

    public function findForEdit(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer|exists:cliente,id',
        ]);
        return redirect()->route('clientes.edit', $validated['id']);
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente.');
    }
}
