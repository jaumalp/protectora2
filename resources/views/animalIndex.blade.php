@extends('otros.plantilla')

@section('title')Inicio @endsection

@section('content')
    <!-- Introduction Row -->
    <h4 class="text-center">¿Nuestros amig@s?<br><small>¡Mira que guap@s!</small></h4>
    <p class="text-parrafado">Mira algunos de nuestros queridos amig@s, seguro que alguno te enamora.</p>

    <div class="row">

        @if (isset($animales) and !is_null($animales))
            <div class="col-lg-12">
                <h5 class="my-4 text-center">Mira, estos son algunos de nuestros preciosos amigos ({{count($animales)}})</h5>
            </div>
            @foreach ($animales as $animal)
                <div class="col-lg-4 col-sm-6 text-center mb-4">
                    <?php
                        if ($animal->getUrlPortada())
                            echo $animal->getHTMLFotoPortada();
                        else
                            echo 'Sin Portada';
                    ?>
                    <h3>{{$animal->nombre}}</h3>
                    <p><b>Raza:</b> <smal>{{$animal->raza}}</smal><br>{!! $animal->descripcion !!}</p>
                </div>
            @endforeach
        @else
            <div class="col-lg-12">
                <h5 class="my-4 text-center">Vaya, parece que no hay ninguno...</h5>
            </div>
        @endif


    </div>
@endsection
