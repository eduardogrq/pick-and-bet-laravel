
@extends('layouts.master')

@section('content')

    <div class="contenedor-login">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-12">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Nombre" name="name" :value="old('name')" required autofocus autocomplete="name">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Apellido</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Apellido" :value="old('lastName')" required>
                        </div>
                        <div class="form-group">
                            <label for="age">Edad</label>
                            <input type="number" min="18" max="100" class="form-control" name="age" id="edad" placeholder="Edad" :value="old('age')" required>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="email" class="form-control" id="email" placeholder="Correo" name="email" :value="old('email')" required>
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Teléfono</label>
                            <input type="number" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Teléfono a 10 dígitos">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password" required autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="password_confirmation" placeholder="Confirmar contraseña" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <button type="submit" class="btn btn-primary">Regístrarme</button>
                    </form>

                    <div class="contenedor-registrar-link">
                        <a href="{{route('login')}}">¿Ya tienes cuenta? Inicia sesión aquí.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

{{--Plantilla original*******************************************--}}

{{--    <x-guest-layout>--}}
{{--        <x-jet-authentication-card>--}}
{{--            <x-slot name="logo">--}}
{{--                --}}{{--            <x-jet-authentication-card-logo />--}}
{{--            </x-slot>--}}

{{--            <x-jet-validation-errors class="mb-4" />--}}


{{--            <form method="POST" action="{{ route('register') }}">--}}
{{--                @csrf--}}

{{--                <div>--}}
{{--                    <x-jet-label for="name" value="{{ __('Nombre') }}" />--}}
{{--                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--                </div>--}}

{{--                <div class="mt-4">--}}
{{--                    <x-jet-label for="email" value="{{ __('Apellido') }}" />--}}
{{--                    <x-jet-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required />--}}
{{--                </div>--}}

{{--                <div class="mt-4">--}}
{{--                    <x-jet-label for="email" value="{{ __('Email') }}" />--}}
{{--                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--                </div>--}}

{{--                <div class="mt-4">--}}
{{--                    <x-jet-label for="email" value="{{ __('Teléfono') }}" />--}}
{{--                    <x-jet-input id="phoneNumber" class="block mt-1 w-full" type="number" name="phoneNumber" :value="old('phoneNumber')" required />--}}
{{--                </div>--}}

{{--                <div class="mt-4">--}}
{{--                    <x-jet-label for="password" value="{{ __('Contraseña') }}" />--}}
{{--                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />--}}
{{--                </div>--}}

{{--                <div class="mt-4">--}}
{{--                    <x-jet-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />--}}
{{--                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />--}}
{{--                </div>--}}

{{--                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())--}}
{{--                    <div class="mt-4">--}}
{{--                        <x-jet-label for="terms">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <x-jet-checkbox name="terms" id="terms"/>--}}

{{--                                <div class="ml-2">--}}
{{--                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [--}}
{{--                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',--}}
{{--                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',--}}
{{--                                    ]) !!}--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </x-jet-label>--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--                <div class="flex items-center justify-end mt-4">--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                        {{ __('Already registered?') }}--}}
{{--                    </a>--}}

{{--                    <x-jet-button class="ml-4">--}}
{{--                        {{ __('Register') }}--}}
{{--                    </x-jet-button>--}}
{{--                </div>--}}
{{--            </form>--}}

{{--        </x-jet-authentication-card>--}}
{{--    </x-guest-layout>--}}
