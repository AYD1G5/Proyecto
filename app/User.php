<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function asignaciones()
    {
        return $this->hasMany('App\Asignacion');
    }
    public function cursos_catedratico()
    {
        return $this->hasMany('App\Curso_catedratico');
    }
    public function pensums_estudiante()
    {
        return $this->hasMany('App\Pensum_estudiante');
    }
    public function asignaciones_temporales()
    {
        return $this->hasMany('App\Asignacion_temporal');
    }
}
