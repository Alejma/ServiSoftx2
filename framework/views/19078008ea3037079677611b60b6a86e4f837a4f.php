<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 align="center">Editando el usuario</h1>
                </div>

                <div class="panel-body">
                	<?php echo Form::model($user, ['route' => ['users.update', $user->id],
                	'method' => 'PUT']); ?>


                    <?php echo $__env->make('users.partials.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                	<?php echo Form::close(); ?>


                   

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>