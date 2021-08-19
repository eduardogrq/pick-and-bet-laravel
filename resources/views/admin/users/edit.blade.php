
@extends('admin.layout')

@section('title')
    Editar Usuarios
@endsection

@section('content')

    <div class="col-12 col-lg-8 offset-lg-2">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Editar usuarios</h4>
                <h6 class="card-subtitle">Editar <code>usuarios</code> a la base de datos Pick and Bet.</h6>
                <form class="form-material m-t-40" action="{{route('users.update', $user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" id="name" name="name" class="form-control form-control-line" value="{{$user->name}}" required> </div>
                    <div class="form-group">
                        <label for="email">Apellido</label>
                        <input type="text" id="lastName" name="lastName" class="form-control" value="{{$user->lastName}}" required> </div>
                    <div class="form-group">
                        <label>Edad</label>
                        <input type="number" id="age" name="age" min="18" max="99" class="form-control" value="{{$user->age}}" required> </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{$user->email}}" required> </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="number" id="phoneNumber" name="phoneNumber" class="form-control" value="{{$user->phoneNumber}}" maxlength="13" required> </div>
                    <div class="form-group">
                        <label>Agregar Rol</label>
                        <select class="form-control" name="role" id="role">
                            <option value="">-</option>
{{--                            listar los roles que aún no tiene--}}
                            @foreach($roles as $role)
                                @if(!$user->hasRole($role->name))
                                    <option value="{{$role->name}}">{{$role->name}}</option>
                                @endif
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Eliminar Rol</label>
                        <select class="form-control" name="removeRole" id="removeRole">
                            <option value="">-</option>
{{--                            listar los roles que ya tiene para removerlos--}}
                            @foreach($roles as $role)
                                @if($user->hasRole($role->name))
                                <option value="{{$role->name}}">{{$role->name}}</option>

                                @endif
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="******"> </div>

                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Editar</button>

                </form>
            </div>
        </div>
    </div>

@endsection


