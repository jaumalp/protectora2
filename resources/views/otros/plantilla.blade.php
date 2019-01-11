<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') (A.P.A Vida)</title>

    <!-- Bootstrap-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Plantilla -->
    <link href="{{asset('css/plantilla.css')}}" rel="stylesheet">

    <!-- Propios -->
    <link href="{{asset('css/propios.css')}}" rel="stylesheet">

    <!-- JS del editor con texto rico -->
    <script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

    <!-- Necesarios para bootStrap -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

  </head>

  <body>

    <!-- Menu superior -->
    @include('otros.menuSuperior')

    <!-- Contenido de la página -->
    <div class="container bg-general pb-5 pt-3 px-4" style="min-height: 600px">
      @yield('content')
    </div>

    <!-- Footer -->
    <footer class="py-2 fixed-bottom bg-huellas border-top border-dark">
        <div class="row">
          <div class="col-12 text-white text-center">Copyright &copy; Jaime L. 2018</div>
        </div>
    </footer>

  </body>

</html>
