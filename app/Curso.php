<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';

    public function pensums()
    {
        return $this->hasMany('App\Pensum');
    }
    public function curso_catedraticos()
    {
        return $this->hasMany('App\Curso_catedratico');
    }
    public function prerequisitos_padres()
    {
        // el segundo parametro especifica la llave foranea
        return $this->hasMany('App\Prerequisito', 'codigo_curso');
    }
    public function prerequisitos_codigo_cursos()
    {
        return $this->hasMany('App\Prerequisito', 'codigo_prerequisito');
    }
    public function postrequisitos_padres()
    {
        // el segundo parametro especifica la llave foranea
        return $this->hasMany('App\Postrequisito', 'codigo_curso');
    }
    public function postrequisitos_codigo_cursos()
    {
        return $this->hasMany('App\Postrequisito', 'codigo_postrequisito');
    }
    public function curso_asignaciones()
    {
        return $this->hasMany('App\Curso_asignacion');
    }
    public function pensum_cursos()
    {
        return $this->hasMany('App\Pensum_curso');
    }
    public function curso_asignaciones_temporales()
    {
        return $this->hasMany('App\Curso_asignacion_temporal');
    }

    
    public function area()
    {
        return $this->belongsTo('App\Area');
    }
    public function escuela()
    {
        return $this->belongsTo('App\Escuela');
    }
}
