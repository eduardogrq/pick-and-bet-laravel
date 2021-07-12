
@extends('layouts.master')

@section('content')
    <!-- TÍTULO -->
    <div class="container-titulo">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Nuestros <span>Free Picks</span></h1>
                    <div class="div-titulo"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- TABLA 1 -->
    @foreach($forecasts as $forecast)
    <div class="container-table">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Nombre de la Categoría</h3>
                    <div class="table-picks-premium">
                        <table class="table table-bg">
                            <thead>
                            <tr>
                                <th scope="col">Fecha</th>
                                <th scope="col">Evento</th>
                                <th scope="col">Pronóstico</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td class="bg-claro">05/07/2021</td>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td class="bg-claro">Lorem ipsum dolor sit amet</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection
