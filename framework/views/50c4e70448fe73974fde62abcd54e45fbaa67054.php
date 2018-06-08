<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 align="center">Especificaciones del usuario # <?php echo e($user->id); ?></h1>
                </div>

                <div class="panel-body">

                    <p><strong>Id: </strong><?php echo e($user->id); ?></p>
                    <p><strong>Nombre: </strong><?php echo e($user->name); ?></p>
                    <p><strong>Correo electronico: </strong><?php echo e($user->email); ?></p>



                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>