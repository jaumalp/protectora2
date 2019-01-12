@extends('otros.plantilla')

@section('title')Inicio @endsection

@section('content')
    <!-- Introduction Row -->
    <h4 class="text-center">¿Nuestros amig@s?<br><small>¡Mira que guap@s!</small></h4>
    <p class="text-parrafado mb-0">Mira algunos de nuestros queridos amig@s, seguro que alguno te enamora.
    Si quieres saber más sobre alguno, pincha en su foto y te lo muestro.</p>

    <div class="row">

        @if (isset($animales) and !is_null($animales))
            @foreach ($animales as $animal)
                <div class="col-lg-4 col-sm-6 text-center sin-margen-bottom mt-3">
                    <hr class="w-75">
                    <?php
                        if ($animal->getUrlPortada())
                            echo $animal->getHTMLFotoPortada();
                        else
                            echo 'Sin Portada';
                    ?>
                    <h3 class="text-uppercase">{{$animal->nombre}}</h3>
                    <p><b>Raza: </b>{{$animal->raza}}</p>
                    <p><b>Edad: </b>{{$animal->edad}}</p>
                    <p>{!! $animal->descripcion !!}</p>
                </div>
            @endforeach
        @else
            <div class="col-lg-12">
                <h5 class="my-4 text-center">Vaya, parece que no hay ninguno...</h5>
            </div>
        @endif


    </div>
@endsection
