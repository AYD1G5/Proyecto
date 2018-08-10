<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pensum_estudiante extends Model
{
    protected $table = 'pensum_estudiante';

    public function codigo_pensum()
    {
        return $this->belongsTo('App\Pensum');
    }
    public function id_estudiante()
    {
        return $this->belongsTo('App\User');
    }
}
