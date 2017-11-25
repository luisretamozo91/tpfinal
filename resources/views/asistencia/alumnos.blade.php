@extends ('layouts.app')
@section('content')

<div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Asistencia</div>

	        <div class="panel-body">

				<form action="{{route('guardar_asistencia')}}" method="POST">
					{{csrf_field()}}
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Apellido</th>
									<th>Nombre</th>
									<th>Asistencia</th>
								</tr>
							</thead>
							<tbody>
								@foreach($alumnos as $alumno)
								<tr name="fila">
									<td>{{$alumno->id}}</td>
									<td>{{$alumno->apellido}}</td>
									<td>{{$alumno->nombre}}</td>
									<td>
										<input name="id{{$alumno->id}}" value="{{$alumno->id}}" type="text" hidden>
										<div class="form-group">
											<input name="asistencia{{$alumno->id}}" value="1" checked type="radio">presente
											<input name="asistencia{{$alumno->id}}" value="2" type="radio">ausente
										</div>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="pull-right">
						<a class="btn btn-default" >Volver </a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
</div>


@endsection