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

{{--    Paso 1--}}
    <div class="container-paso-impar d-flex justify-content-center mt-1 mb-1">

                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="descripcion">
                        <div class="numero">
                            <p>1</p>
                        </div>
                        <div class="descripcion-p">
                            <p>¡Activa tu membresía de acceso y comienza a ganar con nosotros!</p>
                        </div>
                    </div>
                </div>

    </div>

{{--    Paso 2--}}
    <div class="container-paso-impar par">

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="descripcion">
                        <div class="numero">
                            <p>2</p>
                        </div>
                        <div class="descripcion-p">
                            <p>Envíanos un WhatsApp</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="btn-whatsapp">
                        <button class="btn btn-wha"><a href="https://api.whatsapp.com/send?phone=+525579774544&text=%C2%A1Hola!%20Quisiera%20activar%20mi%20membres%C3%ADa%20Pick%20and%20Bet."
                                                       style="color: white; text-decoration: none" target="_blank">Enviar WhatsApp</a> </button>
                    </div>
                </div>
            </div>
        </div>

    </div>

{{--    Paso 3--}}
    <div class="container-paso-impar">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="descripcion">
                        <div class="numero">
                            <p>3</p>
                        </div>
                        <div class="descripcion-p">
                            <p>Realiza tu pago directamente vía PayPal</p>
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
@endsection
