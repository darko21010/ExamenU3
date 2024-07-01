<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cPerApellido' => 'required|string|max:50',
            'cPerNombre' => 'required|string|max:50',
            'cPerDireccion' => 'required|string|max:100',
            'dPerFecNac' => 'required|date',
            'nPerEdad' => 'required|integer',
            'nPerSueldo' => 'required|numeric',
            'cPerRnd' => 'required|string|max:50',
            'nPerEstado' => 'required|in:0,1'
        ];
    }

    public function messages()
    {
        return [
            'cPerApellido.required' => 'El apellido es obligatorio.',
            'cPerNombre.required' => 'El nombre es obligatorio.',
            'cPerDireccion.required' => 'La dirección es obligatoria.',
            'dPerFecNac.required' => 'La fecha de nacimiento es obligatoria.',
            'nPerEdad.required' => 'La edad es obligatoria.',
            'nPerSueldo.required' => 'El sueldo es obligatorio.',
            'cPerRnd.required' => 'El campo Rnd es obligatorio.',
            'nPerEstado.required' => 'El estado es obligatorio.'
        ];
    }
}
