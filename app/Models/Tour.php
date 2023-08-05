<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'contenido',
        'resumen',
        'detallado',
        'incluidos',
        'importante',
        'generales',    
        'ubicacion',
        'precio',
        'dias',
        'img',
        'mapa',
        'categoria',
        'slug'
    ];
}
