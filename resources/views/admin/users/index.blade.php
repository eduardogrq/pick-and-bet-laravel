@extends('layouts.admin')

@section('title')
    Usuarios
@endsection

@section('content')

    <!-- column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tabla de usuarios</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Role</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)

                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->lastName}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phoneNumber}}</td>
                                <td>@foreach($roles as $role)
                                        @if($user->hasRole($role))
                                        <span class="label label-danger">
                                            {{$role->name}}
                                        </span>
                                        @endif
                                    @endforeach
                                </td>
                                <td class="d-flex">
                                    <a href="{{route('users.edit', $user->id)}}">
                                        <button class="btn btn-success mr-2">
                                            <i class="mdi mdi-pencil"></i>
                                        </button>
                                    </a>
                                    @if(Auth::user()->id == $user->id)

                                    @else

                                    <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?');">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
