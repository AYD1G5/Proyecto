<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postrequisito extends Model
{
    protected $table = 'postrequisito';

    public function codigo_curso()
    {
        return $this->belongsTo('App\Curso', 'codigo_curso');
    }
    public function codigo_postrequisito()
    {
        return $this->belongsTo('App\Curso', 'codigo_postrequisito');
    }
}
