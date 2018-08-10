<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion_temporal extends Model
{
    protected $table = 'asignacion_temporal';

    public function curso_asignaciones_temporales()
    {
        return $this->hasMany('App\Curso_asignacion_temporal');
    }

    public function codigo_pensum()
    {
        return $this->belongsTo('App\Pensum');
    }
    public function id_estudiante()
    {
        return $this->belongsTo('App\User');
    }
}
