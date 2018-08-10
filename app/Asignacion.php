<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = 'asignacion';

    public function curso_asignaciones()
    {
        return $this->hasMany('App\Curso_asignacion');
    }

    public function codigo_ciclo()
    {
        return $this->belongsTo('App\Ciclo');
    }
    public function id_estudiante()
    {
        return $this->belongsTo('App\User');
    }
}
