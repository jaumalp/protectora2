@extends('otros.plantilla')

@section('title')Pagina de Ejemplo @endsection

@section('content')
    <!-- Introduction Row -->
    <h4 class="mb-4 pt-3 text-center">¿Que quienes somos?<br>
        <small>¡Perdón por no presentarnos!</small>
    </h4>
    <p class="text-parrafado">Somos una protectora de animales pequeñita, solo somos unas pocas personas que queremos
    y amamos a los mejores compañeros que uno puede tener, ¡los animales de compañia!.</p>
    <p class="text-parrafado">Necesitamos a gente como tu que pueda ayudarnos, necesitamos apoyo para poder seguir nuestra
    labor de ayuda...</p>
    <!-- Team Members Row -->
    <div class="row">

        <div class="col-lg-12">
            <h5 class="my-4 text-center">Mira, estos son algunos de nuestros preciosos amigos</h5>
        </div>

        <div class="col-lg-4 col-sm-6 text-center mb-4">
            <a href="pepita"><img class="rounded-circle img-fluid d-block mx-auto" src="/images/Perros/P2.jpg" alt="">
            </a>
            <h3>Pepita</h3>
            <p><b>Raza:</b> <smal>No se, pero la quiero.</smal><br>¡Adorable!.<br>Se llevarte a mi terreno fácil, me
                porto bien en público, te miro con cara de pena... Eso si, no soy lassie ¿eh?.</p>
        </div>

        <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="/images/Perros/P3.jpg" alt="">
            <h3>Arnold</h3>
            <p><b>Raza:</b> <smal>Pastor Alemán (Creo).</smal><br>¡Cariñoso!.<br>Cuido niños, alegro
                a las visitas... Y eso que soy un frío perro aleman... ¡Ah, y todo a 0€!.</p>
        </div>

        <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="/images/Perros/P4.jpg" alt="">
            <h3>Pochinky (+1)</h3>
            <p><b>Raza:</b> <smal>Husky.</smal><br>¡2 x 1!.<br>No paso frío nunca, somos fotogénicos y encima te llevas 2
                por el precio de 1, ¡Que mas quieres!.</p>
        </div>

        <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="/images/Perros/P5.jpg" alt="">
            <h3>Eldelcan</h3>
            <p><b>Raza:</b> <smal>Labrador.</smal><br>¡Ohhh que monada!.<br>Encima he aprendido a lamer a mi dueño,
                soy todo ventajas (Collar no incluido).</p>
        </div>

    </div>
@endsection
