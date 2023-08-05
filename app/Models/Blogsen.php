<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * Class Blogsen
 *
 * @property $id
 * @property $nombre
 * @property $resumen
 * @property $categoria_id
 * @property $detalle
 * @property $img
 * @property $created_at
 * @property $updated_at
 *
 * @property Blogen $blogen
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Blogsen extends Model
{

  static $rules = [
    'nombre' => 'required',
    'resumen' => 'required',
    'categoria_id' => 'required',
    'detalle' => 'required',
    'img' => 'required|image|max:2048',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['nombre', 'resumen', 'categoria_id', 'detalle', 'img'];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function blogen()
  {
    return $this->hasOne('App\Models\Blogen', 'id', 'categoria_id');
  }
}
