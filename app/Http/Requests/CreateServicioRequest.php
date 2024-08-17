<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServicioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    /*
    public function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'image' => [
                'required',
                'mimes:jpeg,png', // Solo permite formatos JPEG y PNG
                'dimensions:width=600,height=400', // Dimensiones exactas de 600x400
                'max:2000' // Peso máximo del archivo en kilobytes
            ],
        ];
    */
    public function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'imagen' => $this->route('servicio') ? 'nullable' : 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    

    public function messages()
    {
        return [
            'titulo.required' => 'Se necesita un Título para el servicio',
            'descripcion.required' => 'Ingresa una descripción, es necesaria',
            'image.required' => 'Debes seleccionar una imagen',
            'image.mimes' => 'La imagen debe ser en formato jpeg o png',
            'image.dimensions' => 'La imagen debe tener dimensiones exactas de 600x400',
            'image.max' => 'El tamaño de la imagen no debe exceder los 2000 KB',
        ];
    }
}
