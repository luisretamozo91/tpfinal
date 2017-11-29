@extends('layout')

@section('content')
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Alumnos</h2>
			</div>
		</div>
		<div class="pull-right">
			<a class="btn btn-success" href="{{ route('alumnos.create') }}">
				Agregar
			</a>
		</div>
	</div>

	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif

	<table class="table table-bordered">
		<tr>
			<th>Id</th>
			<th>Apellidos</th>
            <th>Nombres</th>
            <th>DNI</th>
            <th>Fecha de Nacimiento</th>
            <th>Lugar de Nacimiento</th>
            <th>Sexo</th>
            <th>Nacionalidad</th>
            <th>Domicilio</th>
            <th>Repitente</th>
			<th width="280px">Acciones</th>
		</tr>
		@foreach ($alumnos as $alumno)
			<tr>
				<td>{{ ++$i }}</td>
				<td>{{ $alumno->apellido}}</td>
                <td>{{ $alumno->nombre}}</td>
                <td>{{ $alumno->dni}}</td>
                <td>{{ $alumno->fechaNacimiento}}</td>
                <td>{{ $alumno->lugarNacimiento}}</td>
                <td>{{ $alumno->sexo}}</td>
                <td>{{ $alumno->nacionalidad}}</td>
                <td>{{ $alumno->domicilio}}</td>
                <td>{{ $alumno->repitente}}</td>
				<td>
					<a class="btn btn-info" href="{{ route('alumnos.show',$alumno->id) }}">
						Mostrar
					</a>
					<a class="btn btn-primary" href="{{ route('alumnos.edit',$alumno->id) }}">
						Editar
					</a>
					
					{!! Form::open(['method' => 'DELETE','route' => ['alumnos.destroy', $alumno->id],'style'=>'display:inline']) !!}

					{!! Form::submit('Delete', ['class' => 'btn btndanger']) !!}

					{!! Form::close() !!}
				</td>
			</tr>
		@endforeach
	</table>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ url('home') }}">
			    Volver al menú
			</a>
        </div>

	{!! $alumnos->links() !!}

@endsection