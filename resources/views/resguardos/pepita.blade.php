@extends('otros.plantilla')

@section('title')Pagina de Ejemplo @endsection

@section('content')
    <!-- Introduction Row -->
    <h4 class="mb-4 pt-3 text-center">¡HOLA GUAP@!<br>
        <small>¡Estoy deseando conocerte!</small>
    </h4>
    <p class="text-indent-justified">Me llamo Pepita, soy una pobre a la que han abandonado por ser demasiado bonita.</p>
    <p class="text-indent-justified">Esto no tiene sentido, con esta cara no entiendo quien se atreve a dejarme en la calle...</p>
    <!-- Team Members Row -->
    <div class="row">

        <div class="col-lg-12">
            <h5 class="my-4 text-center">¡Mira mis fotos!</h5>
        </div>

        <div class="col-lg-12">
            <p class="text-indent-justified">En realidad solo tengo 1...</p>
        </div>

        <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="/images/Perros/P2.jpg" alt="">
            <p>Preciosa mi carita, ¿A que si?</p>
        </div>
    </div>
@endsection
