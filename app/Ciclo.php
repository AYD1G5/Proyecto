<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{
    protected $table = 'ciclo';

    public function asignaciones()
    {
        return $this->hasMany('App\Asignacion');
    }
}
