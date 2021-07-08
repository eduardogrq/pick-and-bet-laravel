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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="overlay-btn">
                                <button class="btn btn-primary">Ver Nuestros Picks</button>
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
                    <div class="img-container-pricks-gratuitos mb-3 ">
                        <div class="contenedor-img">
                            <img src="./img/balon-basketball.png" alt="Balón de basketball">
                        </div>
                        <div class="contenedor-img">
                            <img src="./img/balon-soccer.png" alt="Balón de soccer">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="table-picks-gratuitos">
                        <table class="table table-bg">
                            <thead>
                                <tr>
                                    <th scope="col">Evento</th>
                                    <th scope="col">Pronóstico</th>
                                </tr>
                            </thead>
                            <tbody>

{{--                            // Printing forecasts--}}
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->lastName}}</td>
                                </tr>


                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="container-btn-picks-gratuitos">
                        <button class="btn btn-primary">Ver Todos</button>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        <div class="container-btn">
                            <button class="btn btn-primary">Acceder</button>
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
                        <button class="btn btn-primary">Regístrate Ahora</button>
                        <button class="btn btn-outline-primary">Ver Nuestros Picks</button>
                    </div>
                    <p class="small-text">Este no es un sitio de apuestas deportivas. Nosotros proporcionamos datos que sirven de asesoría solamente. No recomendable para menores de 18 años.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
