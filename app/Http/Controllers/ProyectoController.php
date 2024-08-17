<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
    {
        // Retorna la vista del índice de proyectos
        return view('proyectos');
    }

    public function show($id)
    {
        // Aquí iría la lógica para mostrar un proyecto específico basado en su ID
        return view('proyectos.show', compact('id'));
    }
}
