
@extends('layouts.admin')

@section('title')
    Mi perfil
@endsection

@section('content')
    <!-- Column -->
    <div class="col-12 col-lg-10 offset-lg-1">
        <div class="card">
            <img class="card-img-top" src="../material-pro/assets/images/background/profile-header.jpg" alt="Card image cap">
            <div class="card-body little-profile text-center">
                <div class="pro-img"><img src="../material-pro/assets/images/users/user.jpg" alt="user" /></div>
                <h3 class="m-b-0">{{$user->name . ' ' . Auth::user()->lastName}}</h3>
                <p>{{Auth::user()->email}}</p>
                @if(Auth::user()->hasRole('premium') || Auth::user()->hasRole('admin') )
                    <a href="javascript:void(0)" class="m-t-10 waves-effect waves-dark btn btn-warning btn-md btn-rounded">
                        Premium
                    </a>
                @else
                    <a href="javascript:void(0)" class="m-t-10 waves-effect waves-dark btn btn-success btn-md btn-rounded">
                        Free
                    </a>
                @endif
                <div class="row text-center m-t-20">
                    <div class="col-lg-4 col-md-4 m-t-20">
                        <h3 class="m-b-0 font-light">{{$user->age}}</h3><small>Edad</small></div>
                    <div class="col-lg-4 col-md-4 m-t-20">
                        <h3 class="m-b-0 font-light">{{$user->phoneNumber}}</h3><small>Teléfono</small></div>
                    <div class="col-lg-4 col-md-4 m-t-20">
                        <h3 class="m-b-0 font-light">{{$user->id}}</h3><small>ID</small></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
@endsection



















{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                <x-jet-welcome />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}
