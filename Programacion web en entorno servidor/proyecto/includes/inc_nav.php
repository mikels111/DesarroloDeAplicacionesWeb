<nav class="navbar navbar-expand-sm navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img style="margin-left:30%;" src="img/popcorn.svg" alt="" width="30" height="24">
            <h6>Cartelera</h6>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Acerca</a>
                </li>
                <?php
                if (isset($_SESSION['loged_in'])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="cerrar_sesion.php">Salir</a>
                    </li>
                <?php
                }
                if (isset($_COOKIE['admin'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="lista_peliculas.php">Películas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="peliculas_api.php">API</a>
                    </li>
                <?php
                }
                ?>

            </ul>
        </div>
    </div>
</nav>