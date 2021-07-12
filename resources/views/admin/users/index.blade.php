@extends('layouts.admin')

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
{{--                            Condicional para no poner mi propio usuario--}}
                            @if($user->id !== Auth::user()->id)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->lastName}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phoneNumber}}</td>
                                <td><span class="label label-danger">admin</span> </td>
                                <td>
                                    <a href="#" class="mr-4">
                                        <i class="mdi mdi-pencil"></i>
                                    </a>
                                    <a href="#">
                                        <i class="mdi mdi-delete"></i>
                                    </a>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
