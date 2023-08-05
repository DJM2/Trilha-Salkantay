<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoriaproveedore
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Proveedore[] $proveedores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categoriaproveedore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proveedores()
    {
        return $this->hasMany('App\Models\Proveedore', 'categoria_id', 'id');
    }
    

}
