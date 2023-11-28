
<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <!-- Redes Sociales -->
            <ul class="navbar-nav mb-2 mb-lg-0">
                <div class="row2">
                    <div class="colum">
                        <a href="https://www.instagram.com"><i class="fa-brands fa-instagram fa-2xl"></i></a>
                        <a href="https://www.facebook.com"><i class="fa-brands fa-facebook fa-2xl"></i></a>
                        <a href="https://www.twitter.com"><i class="fa-brands fa-x-twitter fa-2xl"></i></a>
                    </div>
                </div>
            </ul>
            <!-- Logo en el Centro -->
            <div class="mx-auto">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="row2">
                        <a class="nav-link <?php echo ($pagina == 'home') ? 'active' : null ?>" aria-current="page" href="index.php?p=home">
                            <img src="pages/auth/images/logo-largo.png" alt="Logo" style="width: 180px;">
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Menú de Navegación -->
            <?php
            if (isset($_SESSION["email"])) {
                ?>

                <div class="d-flex">
                    <a href="index.php?p=auth/profile" class="btn btn-sm btn-outline-primary me-2">Perfil</a>
                    <a href="pages/auth/actions/logout.php" class="btn btn-sm btn-outline-danger">Cerrar Sesión</a>
                </div>
                <?php
            } else {
                ?>
                <div class="d-flex">
                    <a href="index.php?p=auth/login" class="btn btn-sm btn-outline-primary me-2">Iniciar Sesión</a>
                    <a href="index.php?p=auth/register" class="btn btn-sm btn-outline-success">Registrarse</a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</nav>








