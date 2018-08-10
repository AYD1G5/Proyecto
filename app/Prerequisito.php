<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prerequisito extends Model
{
    protected $table = 'prerequisito';
    
    public function codigo_curso()
    {
        return $this->belongsTo('App\Curso', 'codigo_curso');
    }
    public function codigo_prerequisito()
    {
        return $this->belongsTo('App\Curso', 'codigo_prerequisito');
    }
}
