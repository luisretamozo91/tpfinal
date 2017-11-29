<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
{

	//para indicar que este modelo esta relacionado con la tabla fecha
    protected $table = "fechas";
    
    protected $fillable = [ //rellenable
        'fecha',
    ];

    public function asistencias(){
    	return $this->belongsToMany('App\Alumno', 'alumnos_fechas');
    }

}
