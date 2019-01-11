<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Bootstrap-->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Plantilla -->
    <link href="<?php echo e(asset('css/plantilla.css')); ?>" rel="stylesheet">

    <!-- Propios -->
    <link href="<?php echo e(asset('css/propios.css')); ?>" rel="stylesheet">

    <!-- JS del editor con texto rico -->
    <script src="<?php echo e(asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')); ?>"></script>

    <!-- Necesarios para bootStrap -->
    <script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>

  </head>

  <body>

    <!-- Menu superior -->
    <?php echo $__env->make('otros.menuSuperior', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Contenido de la página -->
    <div class="container bg-perro pb-5 pt-3">
      <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Footer -->
    <footer class="py-2 fixed-bottom bg-huellas border-top border-dark">
        <div class="row">
          <div class="col-12 text-white text-center">Copyright &copy; Jaime L. 2018</div>
        </div>
    </footer>

  </body>

</html>
