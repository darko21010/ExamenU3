<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Definir la tabla asociada al modelo
    protected $table = 'cliente';

    // Definir los campos que pueden ser asignados masivamente
    protected $fillable = [
        'Apellido',
        'Nombre',
        'Email',
        'Direccion',
        'Telefono'
    ];

    // Desactivar las marcas de tiempo si no se usan
    public $timestamps = false;

    // Definir la clave primaria personalizada
    protected $primaryKey = 'id';
}