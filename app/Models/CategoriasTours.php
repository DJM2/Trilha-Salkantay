<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriasTours extends Model
{
    protected $table = 'categorias_tours';
    protected $fillable = ['nombre', 'slug'];

    public function tours()
    {
        return $this->belongsToMany(Tour::class, 'categorias_pivot','categoria_id', 'tour_id' );
    }    
}
