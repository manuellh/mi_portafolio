<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Habilidade
 *
 * @property $id
 * @property $habilidad
 * @property $imagen
 * @property $nivel
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Habilidade extends Model
{
    
    static $rules = [
		'habilidad' => 'required',
		'imagen' => 'required',
		'nivel' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['habilidad','imagen','nivel'];



}
