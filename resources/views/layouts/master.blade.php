<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <title>Pick&Bet - Apuesta para Ganar</title>
</head>
<body>
    <!-- NAV -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./img/pick&bet-logotipo-inverted.png" alt="Logo Pick&Bet">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Premium Picks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Picks Gratuitos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link platzi-text" href="#">Regístrate</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <main class="main">

{{--Contenido principal***************************************************************--}}


    @yield('content')


{{--END Contenido principal************************************************************--}}

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="contenedor-img-footer">
                            <img src="img/pick&bet-logotipo-inverted.png" alt="Logotipo de Pick & Bet">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="contendor-links-footer">
                            <a href="#">Home</a>
                            <a href="#">Premium Picks</a>
                            <a href="#">Free Picks</a>
                            <a href="#">Log in</a>
                            <a href="#">Regístrate</a>
                            <a href="#">Aviso de Seguridad</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-down">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p class="copy">Copyright &copy; 2021 PCIK&BET</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="smartbis">Desarrollado por Smartbis</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>

{{--<script src="./js/jquery-3.5.1.min.js"></script>--}}
{{--<script src="./js/bootstrap.min.js"></script>--}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
