<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carrera';

    public function pensums()
    {
        return $this->hasMany('App\Pensum');
    }
}
