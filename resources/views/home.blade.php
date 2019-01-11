@extends('otros.plantilla')

@section('title')Pagina de Ejemplo @endsection

@section('content')
    <!-- Introduction Row -->
    <h4 class="text-center">¿Que quienes somos?<br>
        <small>¡Perdón por no presentarnos!</small>
    </h4>
    <p class="text-parrafado">Somos una protectora de animales pequeñita, solo somos unas pocas personas que queremos
    y amamos a los mejores compañeros que uno puede tener, ¡los animales de compañia!.</p>
    <p class="text-parrafado">Necesitamos a gente como tu que pueda ayudarnos, necesitamos apoyo para poder seguir nuestra
    labor de ayuda...</p>
    <!-- Team Members Row -->
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
                    <p><b>Raza:</b> <smal>{{$animal->raza}}</smal><br>{{$animal->descripcion}}</p>
                </div>
            @endforeach
        @else
            <div class="col-lg-12">
                <h5 class="my-4 text-center">Vaya, parece que no hay ninguno...</h5>
            </div>
        @endif


    </div>
@endsection
