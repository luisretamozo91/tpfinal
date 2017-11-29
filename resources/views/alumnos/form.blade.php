<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Apellidos: </strong>
			{!! Form::text('apellido', null, array('placeholder' => 'Ingrese sus apellidos','class' => 'form-control')) !!}
		</div>
	</div>

    <div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Nombres: </strong>
			{!! Form::text('nombre', null, array('placeholder' => 'Ingrese sus nombres','class' => 'form-control')) !!}
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>DNI: </strong>
			{!! Form::text('dni', null, array('placeholder' => 'Ingrese su dni','class' => 'form-control')) !!}
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Fecha de Nacimiento: </strong>
			{!! Form::text('fechaNacimiento', null, array('placeholder' => 'Ingrese fecha de nacimiento aaaa-mm-dd','class' => 'form-control')) !!}
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Lugar de nacimiento: </strong>
			{!! Form::text('lugarNacimiento', null, array('placeholder' => 'Ingrese lugar de nacimiento','class' => 'form-control')) !!}
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<input name="sexo" value="1" type="radio">M
			<input name="sexo" value="2" type="radio">F
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Nacionalidad: </strong>
			{!! Form::text('nacionalidad', null, array('placeholder' => 'Ingrese nacionalidad','class' => 'form-control')) !!}
		</div>
	</div>

    <div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Domicilio: </strong>
			{!! Form::text('domicilio', null, array('placeholder' => 'Ingrese su domicilio','class' => 'form-control')) !!}
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 text-center">
		<button type="submit" class="btn btnprimary">
			Aceptar
		</button>
	</div>
</div>