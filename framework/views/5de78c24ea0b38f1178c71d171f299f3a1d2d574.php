<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Usuarios

                  
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                               
                               
                                <th colspan="3">--</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($user->id); ?></td>
                                <td><?php echo e($user->name); ?> </td>
                             
                                <td width="10 px">
                                    <?php if (\Shinobi::can('users.show')): ?>
                                    <a href="<?php echo e(route('users.show', $user->id)); ?>"
                                     class="btn btn-sm btn-default">
                                     Ver    
                                        </a>
                                    <?php endif; ?>
                                    </td>
                                    <td width="10 px">
                                    <?php if (\Shinobi::can('users.edit')): ?>
                                    <a href="<?php echo e(route('users.edit', $user->id)); ?>"
                                     class="btn btn-sm btn-default">
                                     Editar   
                                        </a>
                                    <?php endif; ?>
                                    </td>
                                   
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php echo e($users->render()); ?>

                    
                        
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>