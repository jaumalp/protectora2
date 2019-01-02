<?php

namespace Protectora;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    //
    protected $fillable = [
        'nombre', 'raza', 'estadoAdopcion',
        'descripcion', 'edad', 'salud'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
