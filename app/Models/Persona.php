<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    // Definir la tabla asociada al modelo
    protected $table = 'persona';

    // Definir los campos que pueden ser asignados masivamente
    protected $fillable = [
        'cPerApellido',
        'cPerNombre',
        'cPerDireccion',
        'dPerFecNac',
        'nPerEdad',
        'nPerSueldo',
        'cPerRnd',
        'nPerEstado',
        'remember_token',
        'created_at',
        'updated_at',
    ];

    // Desactivar las marcas de tiempo si no se usan
    public $timestamps = true;

    // Definir la clave primaria personalizada
    protected $primaryKey = 'nPerCodigo';
}