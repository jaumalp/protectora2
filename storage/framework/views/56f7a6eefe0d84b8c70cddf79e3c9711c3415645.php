<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $__env->yieldContent('title'); ?> (A.P.A Vida)</title>

    <!-- Bootstrap-->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Plantilla -->
    <link href="<?php echo e(asset('css/plantilla.css')); ?>" rel="stylesheet">

    <!-- Propios -->
    <link href="<?php echo e(asset('css/propios.css')); ?>" rel="stylesheet">

    <!-- JS del editor con texto rico -->
    <script src="<?php echo e(asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')); ?>"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Necesarios para bootStrap -->
    <script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>

  </head>

  <body>

    <!-- Menu superior -->
    <?php echo $__env->make('otros.menuSuperior', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Contenido de la página -->
    <div class="container bg-general pb-5 pt-3 px-4" style="min-height: 600px">
      <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Footer -->
    <?php echo $__env->make('otros.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <!-- Footer

    <footer class="pt-5 fixed-bottom border-top border-dark">
      <div class="row">
        <div class="col-12 text-white text-left text-primary text-decoration-none">
          <a href="https://www.facebook.com/APA-Vida-La-Carlota-354465445103672/" target="_blank">
            <h3><i class="ml-3 fab fa-facebook-square"></i>acebook</h3>
        </div>
      </div>
    </footer></body>

    -->
  </body>
</html>
