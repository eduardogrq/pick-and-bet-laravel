<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" />

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
            <a class="navbar-brand" href="{{route('welcome')}}">
{{--                <img src="./img/pick&bet-logotipo-inverted.png" alt="Logo Pick&Bet">--}}
                <img src="img/logo_1.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('welcome')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        @if(Auth::user())
                            <a class="nav-link" href="{{route('premiumPicks')}}">Premium Picks</a>
                        @else
                            <a class="nav-link" href="{{route('premiumRegister')}}">Premium Picks</a>
                        @endif


                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('freePicks')}}">Picks Gratuitos</a>
                    </li>
                    @if(!Auth::user())
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link platzi-text" href="{{route('register')}}">Regístrate</a>
                    </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link platzi-text" href="{{route('dashboard')}}">Hola {{Auth::user()->name}}</a>
                        </li>
                    @endif
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
{{--                            <img src="img/pick&bet-logotipo-inverted.png" alt="Logotipo de Pick & Bet">--}}
                            <img src="img/logo_1.png" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="contendor-links-footer">
                            <a href="{{route('welcome')}}">Home</a>
                            <a href="{{route('premiumPicks')}}">Premium Picks</a>
                            <a href="{{route('freePicks')}}">Free Picks</a>
                            <a href="{{route('login')}}">Log in</a>
                            <a href="{{route('register')}}">Regístrate</a>
                            <a href="#">Aviso de Privacidad</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-down">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p class="copy">Copyright &copy; 2021 PICK&BET</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="smartbis">Desarrollado por <a href="https://smartbis.com.mx/" style="text-decoration: none" target="_blank">Smartbis</a></p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
