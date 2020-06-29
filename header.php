

<div class="container-fluid bg-light fixed-top py-3">
    <div class="container">
        <nav class="navbar text-center navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" alt="logotipo" class="img-fluid" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="index.php"><i class="fas fa-home"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="productos.php #telefonos"><i class="fas fa-mobile"></i> Telefonos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="productos.php #tablets">
                            <i class="fas fa-tablet-alt"></i> Tablets</a>
                    </li>
                    <li class="nav-item">
                        <a title="Sign in" class="nav-item nav-link" href="productos.php #laptops">
                            <i class="fas fa-laptop"></i>
                            Computadoras
                        </a>
                    </li>
                    <?php if (isset($_SESSION['admin'])) : ?>
                        <li class="nav-item">
                            <a href="cerrar.php" class="text-danger nav-item nav-link" title="Cerrar Sesión">
                                <i class="fas fa-sign-out-alt"></i>
                            </a>
                        </li>
                    <?php endif ?>

                    <?php if (!isset($_SESSION['admin'])) : ?>
                        <li class="nav-item">
                            <a id="iniciar" title="Iniciar Sesion" class="text-primary nav-item nav-link" href="#" data-toggle="modal" data-target="#staticBackdrop">
                                <i class="fas fa-sign-in-alt">Iniciar Sesion</i>
                            </a>
                        </li>
                    <?php endif ?>

                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- fin del container -->
