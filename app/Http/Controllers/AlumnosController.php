<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumnos;

class AlumnosController extends Controller
{
    public function index()
    {
    	$alumnos = Alumnos::latest()->paginate(5);
    	return view('alumnos.index', compact('alumno'))->with('i', (request()->input('page',1)-1)*5);
    }

    public function create()
    {
    	return view('alumnos.create');
    }

    public function store(Request $request)
    {
    	request()->validate([
    		'nombre' => 'required|max:60',
    		'apellido' => 'required|max:60',
    		'dni' => 'required|max:10',
    		'fechaNacimiento' => 'required',
    		'lugarNacimiento' => 'required|max:60',
    		'sexo'=> 'required|max:1',
    		'nacionalidad' => 'required|max:60',
    		'domicilio' => 'required|max:100',
    		'repitente' => 'required|max:1'
    	]);
    	Alumnos::create($request->all());
    	return redirect()-> route('alumnos.index')->with('succes', 'El alumno fue creado satisfactoriamente')
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::find($id);
        
        return view('alumnos.show',compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);
        
        return view('alumnos.edit',compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
			'nombre' => 'required|max:60',
    		'apellido' => 'required|max:60',
    		'dni' => 'required|max:10',
    		'fechaNacimiento' => 'required',
    		'lugarNacimiento' => 'required|max:60',
    		'sexo'=> 'required|max:1',
    		'nacionalidad' => 'required|max:60',
    		'domicilio' => 'required|max:100',
    		'repitente' => 'required|max:1'
		]);

		Alumno::find($id)->update($request->all());
	
		return redirect()->route('alumnos.index')->with('success','El alumno ha sido actualizado satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumno::find($id)->delete();
        
        return redirect()->route('alumnos.index')->with('success','El alumno ah sido eliminado');
    }
}
