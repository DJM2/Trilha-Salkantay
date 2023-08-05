<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Djmblog
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $cuerpo
 * @property $img
 * @property $keywords
 * @property $slug
 * @property $created_at
 * @property $updated_at
 *
 * @property BlogCategorium $blogCategorium
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Djmblog extends Model
{

  static $rules = [
    'nombre' => 'required|unique:djmblogs',
    'descripcion' => 'required|max:255',
    'cuerpo' => 'required',
    'img' => 'required',
    'keywords' => 'required|max:255',
    'categorias' => 'required|array',
    'slug' => 'required|unique:djmblogs|max:255'
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['nombre', 'descripcion', 'cuerpo', 'img', 'keywords', 'slug'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function categorias() 
  {
    return $this->belongsToMany(Buscadore::class, 'blog_categoria', 'blog_id', 'categoria_id');
  }

}