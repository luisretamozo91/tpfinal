<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = [ //rellenable
        'nombre', 'apellido', 'dni', 'fechaNacimiento', 'lugarNacimiento', 'sexo', 'nacionalidad', 'domicilio', 'repitente', 'grado_id'
    ];

    //para indicar que este modelo esta relacionado con la tabla..
    protected $table = "alumnos";

    public function asistencias(){
    	return $this->belongsToMany('App\Fecha', 'alumnos_fechas');
    }
}
