<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>GESTION MOUTON</title>
    <link rel="stylesheet" href="{{ asset('css/stylee.css') }}">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>X<span>ar-Bi</span></h3>
        </div>


        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(/images/mouton14.jpg)"></div>
                <h4>{{ Auth::user()->prenom }}</h4>
                <small>Client</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                        <a href="{{ route('client.acceuil') }}">
                            <span class="las la-home"></span>
                            <small>Acceuil</small>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-content">

        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>

                <div class="header-menu">
                    <label for="">
                        <span class="las la-search"></span>
                    </label>

                    <div class="notify-icon">
                        <span class="las la-envelope"></span>
                        <span class="notify">4</span>
                    </div>

                    <div class="notify-icon">
                        <span class="las la-bell"></span>
                        <span class="notify">3</span>
                    </div>

                    <div class="user">
                        <div class="bg-img" style="background-image: url(/images/mouton14.jpg)"></div>
                        <span><a href="{{ route('user.logout') }}" class="btn btn-danger">Se Déconnecter</a></span>
                    </div>
                </div>
            </div>
        </header>


        <main>

            <div class="page-header">
                <h1>Xar-Bi</h1>
                <small>Acceuil / Client</small>
            </div>
            <div class="scrolling-text">
                <h2>Bienvenue {{ Auth::user()->prenom }} {{ Auth::user()->nom}} C'est Votre Tableau De Bord Dans L'Application Xar-Bi Voici La Liste Des Moutons</h2>
            </div>

        </main>

        <div class="row">
            @foreach ($moutons as $mouton)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset($mouton->photo) }}" class="card-img-top" alt="{{ $mouton->nom }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <a href="{{ route('moutons.details', $mouton->id) }}" class="btn btn-primary btn-block">Détail</a>
                        <a href="#" class="btn btn-success btn-block">Acheter</a>
                        <h5 class="card-title">{{ $mouton->nom }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
           
    </div>

</body>
</html>

<style>
    .user-details-title {
        background-color: #d0b310;
        color: #fff;
        padding: 10px;
        text-align: center;
    }
    .page-header {
        text-align: center;
    }

    .welcome-message {
        text-align: center;
    }
    .page-header {
        text-align: center;
    }

    .scrolling-text {
        overflow: hidden;
        white-space: nowrap;
        width: 100%;
        background-color: green;
        color: white;
    }
    .row{
        background-color: rgb(221, 203, 10);
    }

    .scrolling-text h2 {
        animation: scroll 15s linear infinite;
    }

    @keyframes scroll {
        0% {
            transform: translateX(100%);
        }
        100% {
            transform: translateX(-100%);
        }
    }
    </style>

