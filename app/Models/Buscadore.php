<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Buscadore
 *
 * @property $id
 * @property $nombre
 * @property $slug
 * @property $created_at
 * @property $updated_at
 *
 * @property BlogCategorium[] $blogCategorias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Buscadore extends Model
{

  static $rules = [
    'nombre' => 'required',
    'slug' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['nombre', 'slug'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function djmblogs()
  {
    return $this->belongsToMany(Djmblog::class, 'blog_categoria', 'categoria_id', 'blog_id');
  }

}