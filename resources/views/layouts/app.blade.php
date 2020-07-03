
{{--<div class="limiter">--}}
{{--    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">--}}
{{--        <div class="wrap-login100 p-t-30 p-b-50">--}}
{{--				<span class="login100-form-title p-b-41">--}}
{{--					Account Login--}}
{{--				</span>--}}
{{--            <form class="login100-form validate-form p-b-33 p-t-5">--}}

{{--                <div class="wrap-input100 validate-input" data-validate = "Enter username">--}}
{{--                    <input class="input100" type="text" name="username" placeholder="User name">--}}
{{--                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>--}}
{{--                </div>--}}

{{--                <div class="wrap-input100 validate-input" data-validate="Enter password">--}}
{{--                    <input class="input100" type="password" name="pass" placeholder="Password">--}}
{{--                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>--}}
{{--                </div>--}}

{{--                <div class="container-login100-form-btn m-t-32">--}}
{{--                    <button class="login100-form-btn">--}}
{{--                        Login--}}
{{--                    </button>--}}
{{--                </div>--}}

{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div id="dropDownSelect1"></div>--}}
{{--<!--===============================================================================================-->--}}
{{--<script src="{{asset("vendor/jquery/jquery-3.2.1.min.js")}}"></script>--}}
{{--<!--===============================================================================================-->--}}
{{--<script src="{{asset("vendor/animsition/js/animsition.min.js")}}"></script>--}}
{{--<!--===============================================================================================-->--}}
{{--<script src="{{asset("vendor/bootstrap/js/popper.js")}}"></script>--}}
{{--<script src="{{asset("vendor/bootstrap/js/bootstrap.min.js")}}"></script>--}}
{{--<!--===============================================================================================-->--}}
{{--<script src="{{asset("vendor/select2/select2.min.js")}}"></script>--}}
{{--<!--===============================================================================================-->--}}
{{--<script src="{{asset("vendor/daterangepicker/moment.min.js")}}"></script>--}}
{{--<script src="{{asset("vendor/daterangepicker/daterangepicker.js")}}"></script>--}}
{{--<!--===============================================================================================-->--}}
{{--<script src="{{asset("vendor/countdowntime/countdowntime.js")}}"></script>--}}
{{--<!--===============================================================================================-->--}}
{{--<script src="{{asset("")}}"></script>--}}

{{--</body>--}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-image: url('{{asset("images/2..jpg")}}');
    " >
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
