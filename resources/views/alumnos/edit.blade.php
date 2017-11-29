@extends('layout')

@section('content')

	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Editar el Alumno</h2>
			</div>

		</div>
				<div class="pull-right">
					<a class="btn btn-primary" href="{{ route('alumnos.index') }}">
						Volver
					</a>
				</div>
	</div>

	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.

			<br><br>
			
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	
	{!! Form::model($alumnos, ['method' => 'PATCH','route' => ['alumnos.update', $alumnos->id]]) !!}
		
		@include('alumnos.form')
	
	{!! Form::close() !!}
	
@endsection