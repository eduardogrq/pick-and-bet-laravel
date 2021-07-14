
@extends('auth.login-layout')

@section('title')
    Registro
@endsection

@section('content')

    <div class="container-login100" style="background-image: url('../../Login_v3/images/bg-02.jpg');">
        <div class="wrap-login100">

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @csrf

                <span class="login100-form-title p-b-34 p-t-27">
                    Registro
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Nombre">
                    <input class="input100" placeholder="Nombre" name="name" :value="old('name')" required autocomplete="name">
{{--                    <span class="focus-input100" data-placeholder="&#xf207;"></span>--}}
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Apellido">
                    <input class="input100" placeholder="Apellido" name="lastName" :value="old('lastName')" required autocomplete="lastName">
{{--                    <span class="focus-input100" data-placeholder="&#xf207;"></span>--}}
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Edad">
                    <input type="number" class="input100" placeholder="Edad" name="age" :value="old('age')" required autocomplete="age">
{{--                    <span class="focus-input100" data-placeholder="&#xf207;"></span>--}}
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Email">
                    <input type="email" class="input100" placeholder="Email" name="email" :value="old('email')" required autocomplete="email">
{{--                    <span class="focus-input100" data-placeholder="&#xf207;"></span>--}}
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Teléfono">
                    <input type="number" class="input100" placeholder="Teléfono" name="phoneNumber" :value="old('phoneNumber')" required autocomplete="phoneNumber">
{{--                    <span class="focus-input100" data-placeholder="&#xf207;"></span>--}}
                </div>

                <div class="wrap-input100 validate-input" data-validate="Ingresar contraseña">
                    <input class="input100" id="password" placeholder="Contraseña" type="password" name="password" required autocomplete="new-password">
{{--                    <span class="focus-input100" data-placeholder="&#xf191;"></span>--}}
                </div>

                <div class="wrap-input100 validate-input" data-validate="Confirmar contraseña">
                    <input class="input100" id="password" placeholder="Confirmar contraseña" type="password" name="password_confirmation" required autocomplete="password_confirmation">
                    {{--                    <span class="focus-input100" data-placeholder="&#xf191;"></span>--}}
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Regístrate
                    </button>
                </div>

                <div class="text-center p-t-10">
                    <small class="text-light">¿Ya tienes una cuenta?</small><br>
                    <a class="txt1" href="{{route('login')}}">
                        Ingresa aquí
                    </a>
                </div>
            </form>

                <div class="container-login100-form-btn pt-5">
                    <a href="{{route('welcome')}}">
                        <button class="login100-form-btn">
                            <i class="fas fa-home mr-1"></i> <small>Home</small>

                        </button>
                    </a>

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
