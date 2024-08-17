<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    // Define los campos asignables en masa
    protected $fillable = ['titulo', 'descripcion', 'imagen'];

    // Define cualquier relación si es necesario (opcional)
    // public function otraRelacion()
    // {
    //     return $this->hasMany(OtroModelo::class);
    // }

    // Si hay atributos ocultos para arreglos JSON
    // protected $hidden = ['atributo_oculto'];

    // Si quieres hacer casting de atributos
    // protected $casts = [
    //     'atributo_fecha' => 'datetime',
    // ];
}