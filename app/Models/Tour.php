<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tours';
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
        'slug'
    ];
    public function categorias()
    {
        return $this->belongsToMany(CategoriasTours::class, 'categorias_pivot', 'tour_id', 'categoria_id');
    }
}
