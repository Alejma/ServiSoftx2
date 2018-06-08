<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Roles

                    <?php if (\Shinobi::can('roles.create')): ?>
                    <a href="<?php echo e(route('roles.create')); ?>" class="btn btn-sm btn-primary pull-right">
                        Agregar
                    </a>
                    <?php endif; ?>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                            
                                <th>Role</th>
                               
                                <th colspan="3">//</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($role->id); ?></td>
                                <td><?php echo e($role->name); ?></td>
                                <td><?php echo e($role->slug); ?></td>
                                <td><?php echo e($role->description); ?></td>

                                <td>
                                    <?php if (\Shinobi::can('roles.show')): ?>
                                    <a href="<?php echo e(route('roles.show', $role->id)); ?>"
                                     class="btn btn-sm btn-default">
                                     Ver    
                                        </a>
                                    <?php endif; ?>
                                    </td>
                                    <td>
                                    <?php if (\Shinobi::can('roles.edit')): ?>
                                    <a href="<?php echo e(route('roles.edit', $role->id)); ?>"
                                     class="btn btn-sm btn-default">
                                     Editar   
                                        </a>
                                    <?php endif; ?>
                                    </td>
                                   
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php echo e($roles->render()); ?>

                    
                        
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>