<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Experiencium
 *
 * @property $id
 * @property $año
 * @property $fecha
 * @property $lugar
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Experiencium extends Model
{
    
    static $rules = [
		'año' => 'required',
		'fecha' => 'required',
		'lugar' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['año','fecha','lugar','descripcion'];



}
