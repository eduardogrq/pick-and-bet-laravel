@extends('layouts.master')

@section('content')
    <!-- TÍTULO -->
    <div class="container-titulo">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Nuestros <span>Picks Premium</span></h1>
                    <div class="div-titulo"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- TABLA 1 -->
    @foreach($categories as $category)
    <div class="container-table">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>{{$category->name}}</h3>
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
                            @foreach($category->forecast as $forecast)
                                @if($forecast->premium)
                                <tr>
                                    <td class="bg-claro">{{$forecast->event_date}}</td>
                                    <td>{{$forecast->event_name}}</td>
                                    <td class="bg-claro">{{$forecast->forecast}}</td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach



@endsection
