<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pensum extends Model
{
    protected $table = 'pensum';

    public function pensum_cursos()
    {
        return $this->hasMany('App\Pensum_curso');
    }
    public function pensums_estudiantes()
    {
        return $this->hasMany('App\Pensum_estudiante');
    }
    public function asignaciones_temporales()
    {
        return $this->hasMany('App\Asignacion_temporal');
    }
    
    public function codigo_carrera()
    {
        return $this->belongsTo('App\Carrera');
    }
}
