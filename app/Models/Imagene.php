<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Imagene
 *
 * @property $id
 * @property $img
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Imagene extends Model
{
    
    static $rules = [
		'img' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['img'];



}
