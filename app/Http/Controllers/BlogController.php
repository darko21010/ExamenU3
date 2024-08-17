<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Retorna la vista del índice del blog
        return view('blog');
    }

    public function show($id)
    {
        // Aquí iría la lógica para mostrar un artículo específico basado en su ID
        return view('blog.show', compact('id'));
    }
}
