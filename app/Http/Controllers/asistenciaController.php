<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlumnoFecha;
use App\Alumno;
use App\Fecha;

class asistenciaController extends Controller
{
    public function listaAlumnos(){
    	/*
    	uso el modelo user para traer todos(all) los alumnos de la base y guardarlo en el array alumnos
    	orderBy para traer ordenado
    	compact para mandar un parametro a la vista
    	*/
    	$alumnos = Alumno::orderBy('apellido')->get();
    	return view('asistencia.alumnos', compact('alumnos'));
    }

    public function guardarAsitencia(){

    	unset($_POST['_token']);
    	foreach ($_POST as $clave=>$valor)
   		{
   			
   			if ($clave =='id'.$valor) {
   				$alumnoFecha = new AlumnoFecha();
	   			$alumnoFecha->fecha_id = Fecha::all()->last()->id; //obtiene el ultimo registro
	   			$alumnoFecha->alumno_id = $valor;
   			}else{
   				$alumnoFecha->asistencia = ($valor==1)?'P':'I';
   				$alumnoFecha->save(); //impacta en la base de datos
   			}

   			session()->flash('mensaje','Asistencia guardada correctamente!');

        	return back();
   		}
    	
    }
}
