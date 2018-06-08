<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Paquetes

                    <?php if (\Shinobi::can('packages.create')): ?>
                    <a href="<?php echo e(route('packages.create')); ?>" class="btn btn-sm btn-primary pull-right">
                        Agregar
                    </a>
                    <?php endif; ?>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Peso</th>
                                <th>Estado</th>

                                <th>Nombre Remitente</th>
                                <th>N° Documento</th>

                                <th colspan="3">//</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $paquetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paquete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($paquete->id); ?></td>
                                <td><?php echo e($paquete->Peso); ?> kg</td>
                                <td><?php echo e($paquete->Estado); ?></td>
                                <td><?php echo e($paquete->Nombre_Remitente); ?></td>
                                <td><?php echo e($paquete->NDocumento); ?></td>

                                <td>
                                    <?php if (\Shinobi::can('packages.show')): ?>
                                    <a href="<?php echo e(route('packages.show', $paquete->id)); ?>"
                                     class="btn btn-sm btn-default">
                                     Ver
                                        </a>
                                    <?php endif; ?>
                                    </td>
                                    <td>
                                    <?php if (\Shinobi::can('packages.edit')): ?>
                                    <a href="<?php echo e(route('packages.edit', $paquete->id)); ?>"
                                     class="btn btn-sm btn-default">
                                     Editar
                                        </a>
                                    <?php endif; ?>
                                    </td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php echo e($paquetes->render()); ?>



                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>