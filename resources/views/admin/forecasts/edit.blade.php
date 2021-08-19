@extends('admin.layout')

@section('title')
    Editar pronósticos
@endsection

@section('content')
    <div class="col-12 col-lg-8 offset-lg-2">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Crear pronósticos</h4>
                <h6 class="card-subtitle">Agregar <code>pronósticos</code> a la base de datos Pick and Bet.</h6>
                <form class="form-material m-t-40" action="{{route('forecasts.update', $forecast->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Evento</label>
                        <input type="text" id="event_name" name="event_name" class="form-control form-control-line" value="{{$forecast->event_name}}" required> </div>
                    <div class="form-group">
                        <label for="email">Fecha del evento</label>
                        <input type="date" id="event_date" name="event_date" class="form-control" value="{{$forecast->event_date}}" required> </div>
                    <div class="form-group">
                        <label>Pronóstico</label>
                        <input type="text" id="forecast" name="forecast" class="form-control" value="{{$forecast->forecast}}" required> </div>
                    <div class="form-group">
                        <label>Categoría</label>
                        <select class="form-control" name="category" id="category" value="{{$forecast->category}}" required>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tipo</label>
                        <select class="form-control" name="premium" id="premium" value="{{$forecast->premium}}" required>
                            <option value="0">Free</option>
                            <option value="1">Premium</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Crear</button>

                </form>
            </div>
        </div>
    </div>
@endsection
