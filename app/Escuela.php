<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $table = 'escuela';

    public function curso()
    {
        return $this->hasMany('App\Curso');
    }
}
