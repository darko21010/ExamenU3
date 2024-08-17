<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'Apellido' => 'required|string|max:50',
            'Nombre' => 'required|string|max:50',
            'Email' => 'required|string|max:100',
            'Direccion' => 'required|string|max:100',
            'Telefono' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'Apellido.required' => 'El apellido es obligatorio.',
            'Nombre.required' => 'El nombre es obligatorio.',
            'Email.required' => 'El email es obligatorio.',
            'Direccion.required' => 'La dirección es obligatoria.',
            'Telefono.required' => 'El telefono es obligatorio.'
        ];
    }
}
