<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                  <li class="nav-item">
                      <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Marín&Asociados</a>
                  </li>
                  <!--
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><?php echo e(config('app.name', 'Laravel')); ?></a>
                  -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Lugar izquierdo del Navbar -->
                    <ul class="nav navbar-nav">
                        <?php if (\Shinobi::can('packages.index')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('packages.index')); ?>">Paquetes</a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Shinobi::can('users.index')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('users.index')); ?>">Usuarios</a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Shinobi::can('roles.index')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('roles.index')); ?>">Roles</a>
                        </li>
                        <?php endif; ?>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Ingresar</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Registrar</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesion
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <?php if(session('info')): ?>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-success">
                        <?php echo e(session('info')); ?>

                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>


        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
