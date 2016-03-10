<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BestWestern Social</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
          type='text/css'>

    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/messages.css') }}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Styles -->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'> --}}


</head>
<body>
<div class="site-container">
    <div class="site-pusher">
        <header class="header">
            @yield('logo')
            <a href="#" class="header__icon" id="header__icon"></a>
            <a href="/" class="header__logo">Logo</a>
            <nav class="menu">
                <ul>
                    <li>
                        <a href="{{ route('user.show',['user' => Auth::user()->id]) }}">
                            <span class="icon icon-mon-compte"></span>
                            <span class="text">Mon compte</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('conversations')}}">
                            <span class="icon icon-message"></span>
                            <span class="text">Mes messages</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('user.index')}}">
                            <span class="icon icon-utilisateur"></span>
                            <span class="text">Utilisateurs connectés</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('activities.index') }}">
                            <span class="icon icon-activite"></span>
                            <span class="text">Activités</span>
                        </a>
                    </li>
                    @if (Auth::guest())
                        <li>
                            <a href="{{ url('/login') }}">
                                <span class="icon icon-mon-compte"></span>
                                <span class="text">Login</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/register') }}">
                                <span class="icon icon-mon-compte"></span>
                                <span class="text">Register</span>
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                        </li>
                    @endif
                </ul>
            </nav>
        </header>

        <div class="site-content">
            @yield('content')
        </div>
    </div>
</div>

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
