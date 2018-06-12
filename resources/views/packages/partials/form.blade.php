<div class="form-group">
	{{ Form::label('Peso', 'Peso')}}
	{{Form::number('Peso', null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{Form::label('Estado', 'Estado - Tipos de estado [En bogega | En camino | Entregado]')}}
	{{Form::text('Estado', null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{ Form::label('Direccion_Remitente', 'Direccion Remitente')}}
	{{Form::text('Direccion_Remitente', null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{ Form::label('Nombre_Remitente', 'Nombre Remitente')}}
	{{Form::text('Nombre_Remitente', null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{ Form::label('NDocumento', 'Número de documento')}}
	{{Form::number('NDocumento', null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{ Form::label('Direccion_Llegada', 'Direccion de llegada')}}
	{{Form::text('Direccion_Llegada', null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{ Form::label('Nombre_Remitido', 'Nombre remitido')}}
	{{Form::text('Nombre_Remitido', null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary'])}}
</div>


