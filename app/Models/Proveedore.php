<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $nombre
 * @property $ruc
 * @property $categoria_id
 * @property $direccion
 * @property $telefono
 * @property $paginaweb
 * @property $correo
 * @property $detalles
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoriaproveedore $categoriaproveedore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'categoria_id' => 'required',
		'telefono' => 'required',
		'correo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','ruc','categoria_id','direccion','telefono','paginaweb','correo','detalles'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoriaproveedore()
    {
        return $this->hasOne('App\Models\Categoriaproveedore', 'id', 'categoria_id');
    }
    

}
