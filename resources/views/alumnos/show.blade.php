@extends('layout')

@section('content')

	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Mostrar el Alumno</h2>
			</div>
			
			<div class="pull-right">
				<a class="btn btn-primary" href="{{ route('alumnos.index') }}">
					Volver
				</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Id: </strong>
				{{ $alumno->id}}
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Apellidos: </strong>
				{{ $alumno->apellido}}
			</div>
		</div>

        <div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Nombres: </strong>
				{{ $alumno->nombre}}
			</div>
		</div>

        <div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>DNI: </strong>
				{{ $alumno->dni}}
			</div>
		</div>

        <div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Fecha de Nacimiento: </strong>
				{{ $alumno->fechaNacimiento}}
			</div>
		</div>

        <div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Lugar de Nacimiento: </strong>
				{{ $alumno->lugarNacimiento}}
			</div>
		</div>

        <div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Sexo: </strong>
				{{ $alumno->sexo}}
			</div>
		</div>

        <div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Nacionalidad: </strong>
				{{ $alumno->nacionalidad}}
			</div>
		</div>

        <div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Domicilio: </strong>
				{{ $alumno->domicilio}}
			</div>
		</div>

        <div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Repitente: </strong>
				{{ $alumno->repitente}}
			</div>
		</div>

        <!--<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Tipo de usuario: </strong>
				{{ $user->usertype_id}}
			</div>
		</div>-->
	</div>
	
@endsection