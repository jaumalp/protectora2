<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Plantilla -->
    <link href="css/plantilla.css" rel="stylesheet">

    <!-- Propios -->
    <link href="css/propios.css" rel="stylesheet">

  </head>

  <body>
    <!-- Menu superior -->
    <?php echo $__env->make('otros.menuSuperior', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- /Menu -->

    <!-- Contenido de la página -->
    <div class="container bg-perro">
      <?php echo $__env->yieldContent('content'); ?>
    </div>
    <!-- /Contenido -->

    <!-- Footer -->
    <footer class="bg-dark py-2">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Jaime L. 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>
