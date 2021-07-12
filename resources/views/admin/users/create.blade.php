@extends('layouts.admin')

@section('content')

    <div class="col-12 col-lg-6 offset-lg-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Crear usuarios</h4>
                <h6 class="card-subtitle">Agregar <code>usuarios</code> a la base de datos Pick and Bet.</h6>
                <form class="form-material m-t-40" action="{{route('users.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" id="name" name="name" class="form-control form-control-line" value="" placeholder="Ingresar nombre"> </div>
                    <div class="form-group">
                        <label for="email">Apellido</label>
                        <input type="text" id="email" name="lastName" class="form-control"> </div>
                    <div class="form-group">
                        <label>Edad</label>
                        <input type="number" id="age" name="age" min="18" max="99" class="form-control"> </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Ej: eduardo@smartbis.com.mx"> </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="number" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="Ej: 5556738475" maxlength="13"> </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="******"> </div>

                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Crear</button>

                </form>
            </div>
        </div>
    </div>


@endsection
