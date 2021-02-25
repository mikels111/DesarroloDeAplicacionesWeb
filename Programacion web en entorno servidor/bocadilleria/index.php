<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bocadilleria php</title>
</head>
<body>
    
</body>
</html> -->

<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bocadilleria.css">
    <link rel="stylesheet" href="css/bocadillos.css">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->


    <!-- <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Bocadillería</title>
</head>

<body>

    <?php
    echo "hola mundo";
    // phpinfo();
    ?>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div id="div1_titulo" class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="click_logo">
                <a class="navbar-brand" href="#">
                    <p>Bocadilleria Full Equip</p>
                    <img id="burger_logo" src="img/burger.ico" alt="logo_bocadilleria">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a id="bocadillos" class="nav-link active" href="#">Bocadillos</a>
                    </li>
                    <li class="nav-item">
                        <a id="bebidas" class="nav-link active" href="#">Bebidas</a>
                    </li>
                </ul>
            </div>

        </div>
        <img id="img_carro" src="img/carro.png" alt="carro">
    </nav>
    <!-- Fin barra de navegación -->

    <!-- <header>
        <div id="div_header">
            <div id="div_navegador_ayuda">
                <nav id="navegador">
                    <div><button id="bocadillos">Bocadillos</button></div>
                    <div><button id="bebidas">Bebidas</button></div>
                </nav>
                <img width="50px" height="50px" src="../img/interrogacion.png" alt="ayuda">
            </div>

            <h1 id="titulo_bocadilleria">Bocadilleria</h1>
            <img id="img_carro" src="../img/carro.png" alt="carro">
        </div>
    </header> -->

    <main>
        <div id="div_bocadillos_bebidas">
            <div id="div_bocadillos_bebidas2" class="row">
            </div>

        </div>

        <!-- Div de bocadillos y bebidas-->
        <!-- <div id="carrito_fondo"> -->
        <div id="div_carrito">

            <h3>Carro</h3>
            <table id="carrito">

            </table>
            <div id="div_btn"><button class="btn" id="imprimir">Imprimir cuenta</button></div>

        </div>
        <!-- </div> -->
    </main>
    <!-- Div del carrito-->




    <footer>

    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/html2pdf.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bocadilleria.js"></script>

</body>

</html>