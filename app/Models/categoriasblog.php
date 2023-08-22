<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoriasblog extends Model
{
    protected $table = 'categoriasblogs';
    protected $fillable=['nombre', 'slug'];
    public function tags(){
        return $this->belongsToMany(Blog::class);
    }
}
