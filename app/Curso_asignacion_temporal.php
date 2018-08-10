<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso_asignacion_temporal extends Model
{
    protected $table = 'ciclo_asignacion_temporal';

    public function codigo_curso()
    {
        return $this->belongsTo('App\Curso');
    }
    public function codigo_asignacion_temporal()
    {
        return $this->belongsTo('App\Asignacion_temporal');
    }
}
