<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

use App\Http\Requests\CreateServicioRequest;

use Illuminate\Support\Facades\Storage;


class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicio::all();
        return view('servicios.index', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $servicio = new Servicio();
        $servicio->titulo = $request->titulo;
        $servicio->descripcion = $request->descripcion;

        if ($request->hasFile('imagen')) {
            $imageName = time().'.'.$request->imagen->extension();  
            $request->imagen->move(public_path('images'), $imageName);
            $servicio->imagen = 'images/' . $imageName;
        }

        $servicio->save();

        return redirect()->route('servicios.index')->with('estado', 'El Servicio fue creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        return view('servicios.edit', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
        {
            // Validar los datos
            $request->validate([
                'titulo' => 'required|string|max:255',
                'descripcion' => 'required|string',
                'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Nota: 'required' eliminado ya que no es obligatorio al actualizar
            ]);
        
            // Actualizar el servicio con los nuevos datos
            $servicio->titulo = $request->titulo;
            $servicio->descripcion = $request->descripcion;
        
            // Si se sube una nueva imagen
            if ($request->hasFile('imagen')) {
                // Eliminar la imagen anterior si existe
                if ($servicio->imagen) {
                    Storage::delete($servicio->imagen);
                }
        
                // Subir la nueva imagen
                $imageName = time().'.'.$request->imagen->extension();
                $request->imagen->move(public_path('images'), $imageName);
                $servicio->imagen = 'images/' . $imageName;
            }
        
            // Guardar los cambios
            $servicio->save();
        
            return redirect()->route('servicios.index')->with('estado', 'El Servicio fue actualizado correctamente');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        //
    }
}
