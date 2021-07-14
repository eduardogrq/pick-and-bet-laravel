@extends('admin.layout')

@section('title')
    Crear Usuarios
@endsection

@section('content')

    <div class="col-12 col-lg-8 offset-lg-2">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Crear usuarios</h4>
                <h6 class="card-subtitle">Agregar <code>usuarios</code> a la base de datos Pick and Bet.</h6>
                <form class="form-material m-t-40" action="{{route('users.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" id="name" name="name" class="form-control form-control-line" value="" placeholder="Ingresar nombre" required> </div>
                    <div class="form-group">
                        <label for="email">Apellido</label>
                        <input type="text" id="lastName" name="lastName" class="form-control" required> </div>
                    <div class="form-group">
                        <label>Edad</label>
                        <input type="number" id="age" name="age" min="18" max="99" class="form-control" required> </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Ej: eduardo@smartbis.com.mx" required> </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="number" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="Ej: 5556738475" maxlength="13" required> </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="******" required> </div>
{{--                    Roles--}}
                    <div class="form-group">
                        <label>Rol</label>
                        <select class="form-control" name="role" id="role" required>
                            <option value="">-</option>
                            @foreach($roles as $role)
                                <option value="{{$role->name}}">{{$role->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Crear</button>

                </form>
            </div>
        </div>
    </div>


@endsection
