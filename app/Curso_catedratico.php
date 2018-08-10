<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso_catedratico extends Model
{
    protected $table = 'curso_catedratico';

    public function codigo_curso()
    {
        return $this->belongsTo('App\Curso');
    }
    public function id_catedratico()
    {
        return $this->belongsTo('App\User');
    }
}
