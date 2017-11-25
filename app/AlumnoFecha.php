<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnoFecha extends Model
{
    protected $table = 'alumnos_fechas';

    protected $fillable = [ //rellenable
        'alumno_id', 'fecha_id', 'asistencia', 
    ];
}
