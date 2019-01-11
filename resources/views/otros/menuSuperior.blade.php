<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light  fixed-top bg-huellas border-bottom border-dark">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="#">¡Hola Maria Jesús!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Página Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nuestros Perretes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">¿Quienes Somos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">¿Nos Ayudas?</a>
                </li>

                <?php
                    if (\Illuminate\Support\Facades\Auth::check()){
                        $user = \Illuminate\Support\Facades\Auth::user();
                        dd($user);
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>

