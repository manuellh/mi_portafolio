<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hobby
 *
 * @property $id
 * @property $hobby
 * @property $img
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Hobby extends Model
{
    
    static $rules = [
		'hobby' => 'required',
		'img' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['hobby','img'];



}
