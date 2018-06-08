<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 align="center">Especificaciones del paquete # <?php echo e($paquete->id); ?></h1>
                </div>

                <div class="panel-body">

                    <p><strong>Id: </strong><?php echo e($paquete->id); ?></p>
                    <p><strong>Peso: </strong><?php echo e($paquete->Peso); ?></p>
                    <p><strong>Estado: </strong><?php echo e($paquete->Estado); ?></p>
                    <p><strong>Dirección Remitente: </strong><?php echo e($paquete->Direccion_Remitente); ?></p>
                    <p><strong>Nombre Remitente: </strong><?php echo e($paquete->Nombre_Remitente); ?></p>
                    <p><strong>Número de Documento: </strong><?php echo e($paquete->NDocumento); ?></p>
                    <p><strong>Dirección Remitido: </strong><?php echo e($paquete->Direccion_Llegada); ?></p>
                    <p><strong>Nombre Remitido: </strong><?php echo e($paquete->Nombre_Remitido); ?></p>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>