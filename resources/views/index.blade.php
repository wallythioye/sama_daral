<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - GESTION MOUTON</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('js/script.js') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bodi">
    <header class="no-background">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="{{ asset('/images/mouton18.jpg') }}" alt="Logo Mouton" width="50"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/liste/mouton">Les Moutons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contacts">Contact</a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="ml-auto"> --}}
                    <div class="ml-auto" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Se Connecter') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __("S'inscrire") }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->prenom }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

        <nav class="scrolling-text">
            <h2>Bienvenue dans votre application de gestion mouton "Xar-Bi"</h2>
            <a class="itemN" href="#"></a>
            <a class="itemN" href="#"></a>
            <a class="itemN" href="#"></a>
            <a class="itemN" href="#"></a>
        </nav>

        <div class="containere">
            <div class="carousel">
                <div class="carousel__face"><span></span></div>
                <div class="carousel__face"><span></span></div>
                <div class="carousel__face"><span></span></div>
                <div class="carousel__face"><span></span></div>
                <div class="carousel__face"><span></span></div>
                <div class="carousel__face"><span></span></div>
                <div class="carousel__face"><span></span></div>
                <div class="carousel__face"><span></span></div>
                <div class="carousel__face"><span></span></div>
            </div>
        </div>

        <div class="toppeach">

        </div>


        <div class="gallery">
            <div class="item one selected">

            </div>
            <div class="item two">

            </div>
            <div class="item three">

            </div>
            <div class="item four">

            </div>
            <div class="item five">

            </div>
            <div class="item six">

            </div>
            <div class="item seven">

            </div>
            <div class="item heithe">

            </div>
            <div class="item ninght">

            </div>
            <div class="item ten">

            </div>
            <div class="item onze">

            </div>
            <div class="item douze">

            </div>
        </div>

        <br>
</body>
</html>

<style>
.nav-link {
    color: #fff;
}
.bodi{
    background-color: rgb(98, 144, 98);
}
footer{
    width: 400px;
    background-color: rgba(13, 13, 13, 0.905);
}
</style>
