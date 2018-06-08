<div class="form-group">
	<?php echo e(Form::label('Peso', 'Peso')); ?>

	<?php echo e(Form::number('Peso', null, ['class' => 'form-control'])); ?>

</div>
<div class="form-group">
	<?php echo e(Form::label('Estado', 'Estado')); ?>

	<?php echo e(Form::text('Estado', null, ['class' => 'form-control'])); ?>

</div>
<div class="form-group">
	<?php echo e(Form::label('Direccion_Remitente', 'Direccion Remitente')); ?>

	<?php echo e(Form::text('Direccion_Remitente', null, ['class' => 'form-control'])); ?>

</div>
<div class="form-group">
	<?php echo e(Form::label('Nombre_Remitente', 'Nombre Remitente')); ?>

	<?php echo e(Form::text('Nombre_Remitente', null, ['class' => 'form-control'])); ?>

</div>
<div class="form-group">
	<?php echo e(Form::label('NDocumento', 'Número de Documento')); ?>

	<?php echo e(Form::number('NDocumento', null, ['class' => 'form-control'])); ?>

</div>
<div class="form-group">
	<?php echo e(Form::label('Direccion_Llegada', 'Direccion Remitido')); ?>

	<?php echo e(Form::text('Direccion_Llegada', null, ['class' => 'form-control'])); ?>

</div>
<div class="form-group">
	<?php echo e(Form::label('Nombre_Remitido', 'Nombre Remitido')); ?>

	<?php echo e(Form::text('Nombre_Remitido', null, ['class' => 'form-control'])); ?>

</div>
<div class="form-group">
	<?php echo e(Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary'])); ?>

</div>
