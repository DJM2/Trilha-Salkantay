<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoriasblog extends Model
{
    use HasFactory;
    protected $fillable=['nombre'];
    public function tags(){
        return $this->belongsToMany(Blog::class);
    }
}
