@extends('otros.plantilla')

@section('title')Ver un perrito @endsection

@section('content')
    <!-- Introduction Row -->

    <h4 class="pb-4 text-center">¡HOLA GUAP@!<br>
        <small>¡Me llamo <b>{{$animal->nombre}}</b>!</small>
    </h4>

    <?php echo $animal->getHTMLFotoPortada(false) ?>

    <p class="mb-3"></p>

    <div class="container text-parrafado">
        {!! $animal->descripcion;!!}
    </div>


    <!-- EN PRUEBAS

    <div id="inicial">INICIAL</div>
    <div id="codificado">CODIFICADO</div>
    <div id="decodificado">DECODIFICADO</div>
    <button onclick="carga()" value="Cargar" type="button">CLICK</button>

    <textarea class="form-control" id="editor"></textarea>
    <script language="JavaScript">
        CKEDITOR.replace('editor');
        function carga(){
            $('#inicial').text("Inicial: <?php $inicial = "<p>'<strong>dfg</strong></p>"; echo $inicial; ?>");
            $('#codificado').text("Codificado: "+CKEDITOR.instances.editor.getData());
        }
    </script>

    <!-- EN PRUEBAS -->


    <div class="row">

        <?php $urlsFotos = $animal->getArrayUrlsFotos(false); ?>

        @if (count($urlsFotos)>0)
            <div class="col-lg-12">
                    <h4 class="m2-4 text-center mt-3">¡Mira mis fotos!</h4>
            </div>
            <div class="col-lg-12">
                <h5 class="text-center">Tengo {{count($urlsFotos)}} ahora mismo...</h5>
            </div>

            <div class="container">
            <!-- SLIDER para fotos -->
                <div id="carouselExampleControls" class="mx-3 carousel slide mb-3" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php $primera = true; ?>
                        @foreach($urlsFotos as $unaFoto)
                            <div class="carousel-item
                            <?php if ($primera){
                                $primera = false;
                                echo 'active';
                            }?>
                                "><img class="d-block w-100 rounded" src="{{$unaFoto}}" alt="Fotito">
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- /slider -->

            <!-- No usar
                @foreach($urlsFotos as $una)
                <div class="col-12 col-md-6 col-lg-4 text-center mt-2 mb-4 px-4">
                    <img class="rounded img-fluid d-block mx-auto"
                         src="{{$una}}" alt="">
                </div>
            @endforeach
            <!-- -->
        @else
            <h4 class="text-center mt-3">Solo tengo la foto de arriba, lo siento...</h4>
        @endif
    </div>
@endsection
