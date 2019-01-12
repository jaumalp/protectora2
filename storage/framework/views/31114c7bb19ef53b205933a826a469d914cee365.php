<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light  fixed-top bg-huellas border-bottom border-dark">
    <div class="container">
        <a class="navbar-brand" href="#">A.P.A Vida <i><small>La Carlota</small></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/">Página Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/animales">Nuestros Perretes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/quienes-somos">¿Quienes Somos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/ayudanos">¿Nos Ayudas?</a>
                </li>

                <?php if(Auth::check()): ?>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="/administrar">ADMINISTRAR</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

