<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pensum_curso extends Model
{
    protected $table = 'pensum_curso';

    public function codigo_pensum()
    {
        return $this->belongsTo('App\Pensum');
    }
    public function codigo_curso()
    {
        return $this->belongsTo('App\Curso');
    }
}
