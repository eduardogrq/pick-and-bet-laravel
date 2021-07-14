
@extends('auth.login-layout')

@section('title')
    Login
@endsection

@section('content')

    <div class="container-login100" style="background-image: url('../../Login_v3/images/bg-02.jpg');">
        <div class="wrap-login100">

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <a href="{{route('welcome')}}">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>
                </a>

                <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Email">
                    <input class="input100" id="email" type="email" name="email" :value="old('email')" required autofocus>
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" id="password" type="password" name="password" required autocomplete="current-password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        {{ __('Log in') }}
                    </button>
                </div>

                <div class="text-center p-t-90">
                    <small class="text-light">¿No tienes una cuenta?</small><br>
                    <a class="txt1" href="{{route('register')}}">
                        Regístrate aquí
                    </a>
                </div>
            </form>
        </div>
    </div>

@endsection
