@extends('layouts.master')

@section('content')

    <!-- HERO -->
    <div id="hero" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./img/hero-background.png" alt="First slide">
            </div>
        </div>
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="overlay-container-content">
                            <h1>Con Nosotros <br> ¡Apuesta y Gana!</h1>
                            <p>Pick & Bet te ofrece los mejores pronósticos para mejorar los resultados en tus Apuestas Deportivas,
                                <br> diseñadas por expertos en cada mercado. Con nuestras referencias, convertirás tus perdidas en ganancias.
                                <br> Aprende a jugar con los Bookies (Casas de Apuestas), perfecciona tus apuestas en línea!</p>
                            <div class="overlay-btn">
                                <a href="{{route('freePicks')}}"><button class="btn btn-primary">Ver Nuestros Picks</button></a>
                            </div>
                            <p class="small-text">Este no es un sitio de apuestas deportivas. Nosotros proporcionamos datos que sirven de asesoría solamente. No recomendable para menores de 18 años.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PICKS GRATUITOS -->
    <div class="picks-gratuitos">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <h2>Nuestros <span>Picks Gratuitos</span></h2>
                    <div class="img-container-pricks-gratuitos mb-3">
                        <div class="contenedor-img">
                            <img src="./img/balon-basketball.png" alt="Balón de basketball">
                        </div>
                        <div class="contenedor-img" style="width: 100px">
                            <img src="./img/balon-soccer.png" alt="Balón de soccer">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="table-picks-gratuitos">
                        <table class="table table-bg">
                            <thead>
                                <tr>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Evento</th>
                                    <th scope="col">Pronóstico</th>
                                </tr>
                            </thead>
                            <tbody>

{{--                            // Printing forecasts--}}
                            @foreach($forecasts as $forecast)
                                <tr>
                                    <td class="bg-claro">{{$forecast->event_date}}</td>
                                    <td class="bg-claro">{{$forecast->event_name}}</td>
                                    <td class="bg-claro">{{$forecast->forecast}}</td>
                                </tr>


                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="container-btn-picks-gratuitos">
                        <a href="{{route('freePicks')}}">
                            <button class="btn btn-primary">Ver Todos</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ACCESO ILIMITADO -->
    <div class="acceso-ilimitado">
        <div class="bg-img-acceso-ilimitado">
            <img src="./img/locked-icon.png" alt="Imagen de fondo de los Picks Premium">
        </div>
        <div class="overlay-acceso-ilimitado d-flex align-items-center">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-md-7">
                        <h2>Obtén Acceso Ilimitado a Nuestros <span>Picks Premium</span></h2>
                        <p>Accede a la mejor asesoría por cada deporte: fútbol soccer, béisbol, fútbol americano, básquetbol, MMA… cada uno a un precio muy accesible; o contrata el Servicio Premium (todos los deportes) a una cuota increíble. Pick & Bet el mejor Tipster Online</p>
                        <div class="container-btn">
                            @if(Auth::user())
                                <a class="nav-link" href="{{route('premiumPicks')}}">
                                    <button class="btn btn-primary">Acceder</button>
                                </a>
                            @else
                                <a class="nav-link" href="{{route('premiumRegister')}}">
                                    <button class="btn btn-primary">Acceder</button>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="contenedor-img-casco">
                            <img src="./img/casco-football.png" alt="Imagen del Casco">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CON NOSOTROS -->
    <div class="con-nosotros">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Con Nosotros <br> ¡Apuesta y Gana!</h2>
                    <div class="contenedor-img-guantes">
                        <img src="./img/guantes-artes-marciales.png" alt="Guantes">
                    </div>
                    <div class="contenedor-botones">
                        <a class="btn btn-primary" href="{{route('register')}}">Regístrate Ahora</a>
                        <a class="btn btn-outline-primary" href="{{route('freePicks')}}">Ver Nuestros Picks</a>
                    </div>
                    <p class="small-text">Este no es un sitio de apuestas deportivas. Nosotros proporcionamos datos que sirven de asesoría solamente. No recomendable para menores de 18 años.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
