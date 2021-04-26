<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('includes/inc_head.php') ?>
</head>

<body>
    <?php include('includes/inc_nav.php') ?>
    <div id="ms-main">
        <div id="ms-content">
            <?php include('includes/carousel.php') ?>
            <span class="badge bg-primary titulo">
                <h4>Películas</h4>
            </span>
            <p>
                <label for="fecha">Fecha:</label>
                <select name="fecha" id="fecha" class="form-select-sm">
                    <option value="fecha1">01-05-2021</option>
                    <option value="fecha1">06-05-2021</option>
                </select>

            </p>
            <div id="ms-film-flexbox">
                <div class="card" style="width: 12rem;">
                    <img src="img/peli1.jpg" class="img-fluid" alt="pelic">
                    <div class="card-body">
                        <h5 class="card-title">
                            Jeanne Dielman, 23, Quai du Commerce 1080 Bruxelles</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary btn-horarios">Consultar horarios</a>
                    </div>
                </div>
                <div class="card" style="width: 12rem;">
                    <img src="img/peli2.jpg" class="img-fluid" alt="pelic">
                    <div class="card-body">
                        <h5 class="card-title">Miedo y asco en Las Vegas</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary btn-horarios">Consultar horarios</a>
                    </div>
                </div>
                <div class="card" style="width: 12rem;">
                    <img src="img/peli3.jpg" class="img-fluid" alt="pelic">
                    <div class="card-body">
                        <h5 class="card-title">Toro Salvaje</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary btn-horarios">Consultar horarios</a>
                    </div>
                </div>
                <div class="card" style="width: 12rem;">
                    <img src="img/peli4.jpg" class="img-fluid" alt="pelic">
                    <div class="card-body">
                        <h5 class="card-title">E.T, el extraterrestre</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary btn-horarios">Consultar horarios</a>
                    </div>
                </div>
                <div class="card" style="width: 12rem;">
                    <img src="img/peli5.jpg" class="img-fluid" alt="pelic">
                    <div class="card-body">
                        <h5 class="card-title">El imperio del sol</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary btn-horarios">Consultar horarios</a>
                    </div>
                </div>
                <div class="card" style="width: 12rem;">
                    <img src="img/peli6.jpg" class="img-fluid" alt="pelic">
                    <div class="card-body">
                        <h5 class="card-title">Barton Fink</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary btn-horarios">Consultar horarios</a>
                    </div>
                </div>
                <div class="card" style="width: 12rem;">
                    <img src="https://pics.filmaffinity.com/la_grande_bellezza-366210175-large.jpg" class="img-fluid" alt="pelic">
                    <div class="card-body">
                        <h5 class="card-title">La gran belleza</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary btn-horarios">Consultar horarios</a>
                    </div>
                </div>
            </div>
            <!-- fin flexbox -->

            <span class="badge bg-primary titulo">
                <h4>Noticias</h4>
            </span>
        </div>
    </div>
    <footer>
        <p>&copy;Mikel Seara | Proyecto Desarrollo Web</p>
    </footer>
</body>

</html>