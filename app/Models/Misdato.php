<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Misdato
 *
 * @property $id
 * @property $nombre
 * @property $edad
 * @property $estudios
 * @property $email
 * @property $descripcion
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Misdato extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'edad' => 'required',
		'estudios' => 'required',
		'email' => 'required',
		'descripcion' => 'required',
    'img' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','edad','estudios','email','descripcion','img'];



}
