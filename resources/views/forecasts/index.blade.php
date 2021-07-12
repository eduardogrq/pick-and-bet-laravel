@extends('layouts.admin')

@section('content')

    <!-- column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tabla de Eventos</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Evento</th>
                            <th>Pronóstico</th>
                            <th>Categoría</th>
                            <th>Tipo</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($forecasts as $forecast)
                            {{--                            Condicional para no poner mi propio usuario--}}
{{--                            @if($user->id !== Auth::user()->id)--}}
                                <tr>
                                    <td>{{$forecast->id}}</td>
                                    <td>{{$forecast->event_date}}</td>
                                    <td>{{$forecast->event_name}}</td>
                                    <td>{{$forecast->forecast}}</td>
                                    <td>{{$forecast->category}}</td>
                                    <td>
                                        @if($forecast->premium == true)
                                            <span class="label label-warning">premium</span>
                                        @else
                                            <span class="label label-primary">free</span>
                                        @endif

                                    </td>

                                    <td>
                                        <a href="#" class="mr-4">
                                            <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <a href="#">
                                            <i class="mdi mdi-delete"></i>
                                        </a>
                                    </td>
                                </tr>
{{--                            @endif--}}
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
