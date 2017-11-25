<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
{
    protected $fillable = [ //rellenable
        'fecha',
    ];

    //para indicar que este modelo esta relacionado con la tabla fecha
    protected $table = "fechas";

    public function asistencias(){
    	return $this->belongsToMany('App\Alumno', 'alumnos_fechas');
    }

}
