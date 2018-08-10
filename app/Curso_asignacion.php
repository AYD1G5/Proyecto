<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso_asignacion extends Model
{
    protected $table = 'curso_asignacion';

    public function codigo_curso()
    {
        return $this->belongsTo('App\Curso');
    }
    public function codigo_asignacion()
    {
        return $this->belongsTo('App\Asignacion');
    }
}
