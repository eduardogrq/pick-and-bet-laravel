
@extends('admin.layout')

@section('content')

    <div class="col-12 col-lg-8 offset-lg-2">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Crear usuarios</h4>
                <h6 class="card-subtitle">Agregar <code>usuarios</code> a la base de datos Pick and Bet.</h6>
                <form class="form-material m-t-40" action="{{route('users.update', $user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" id="name" name="name" class="form-control form-control-line" value="{{$user->name}}"> </div>
                    <div class="form-group">
                        <label for="email">Apellido</label>
                        <input type="text" id="lastName" name="lastName" class="form-control" value="{{$user->lastName}}"> </div>
                    <div class="form-group">
                        <label>Edad</label>
                        <input type="number" id="age" name="age" min="18" max="99" class="form-control" value="{{$user->age}}"> </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{$user->email}}"> </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="number" id="phoneNumber" name="phoneNumber" class="form-control" value="{{$user->phoneNumber}}" maxlength="13"> </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="******"> </div>

                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Editar</button>

                </form>
            </div>
        </div>
    </div>

@endsection


