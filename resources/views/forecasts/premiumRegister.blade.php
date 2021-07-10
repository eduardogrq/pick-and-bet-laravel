@extends('layouts.master')

@section('content')
    <!-- TÍTULO -->
    <div class="container-titulo">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Regístrate <span>Hoy Mismo</span></h1>
                    <div class="div-titulo"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-paso-impar">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="descripcion">
                        <div class="numero">
                            <p>1</p>
                        </div>
                        <div class="descripcion-p">
                            <p>Envíanos un WhatsApp al 55 1234 1234 solicitando tu registro</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="btn-whatsapp">
                        <button class="btn btn-wha">Enviar WhatsApp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-paso-impar par">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="descripcion">
                        <div class="numero">
                            <p>2</p>
                        </div>
                        <div class="descripcion-p">
                            <p>¡Recibe tus credenciales de acceso y comienza a ganar con nosotros!</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="img-pagos">
                        <img src="./img/pago-paypal.png" alt="Opciones de pago">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-paso-impar">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="descripcion">
                        <div class="numero">
                            <p>3</p>
                        </div>
                        <div class="descripcion-p">
                            <p>¡Recibe tus credenciales de acceso y comienza a ganar con nosotros!</p>
                        </div>
                    </div>
                </div>
{{--                <div class="col-12 col-md-6 d-flex justify-content-center">--}}
{{--                    <div class="img-registro mt-3">--}}
{{--                        <img src="./img/" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
