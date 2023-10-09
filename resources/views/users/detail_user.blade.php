<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GESTION MOUTON</title>
    <link rel="stylesheet" href="{{ asset('css/stylee.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>X<span>ar-Bi</span></h3>
        </div>

        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(/images/wall.png)"></div>
                <h4>{{ Auth::user()->prenom }}</h4>
                <small>Administrateur</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                        <a href="{{ route('admin.acceuill') }}">
                            <span class="las la-home"></span>
                            <small>Acceuil</small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('liste-user') }}">
                            <span class="las la-users"></span>
                            <small>Liste des Utilisateurs</small>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="las la-cog"></span>
                            <small>Paramètres</small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contacts.index') }}">
                             <span class="las la-envelope"></span>
                             <small>Liste de Message</small>
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
                        <div class="bg-img" style="background-image: url(/images/wall.png)"></div>
                        <span><a href="{{ route('user.logout') }}" class="btn btn-danger">Se Déconnecter</a></span>
                    </div>
                </div>
            </div>
        </header>


        <main>

            <div class="page-header">
                <h1>Xar-Bi</h1>
                <small>Acceuil / Administrateur</small>
            </div>
            <div class="scrolling-text">
                <h2>Detail Des Informations Sur {{ $user->prenom }} {{ $user->nom}}</h2>
            </div>
            <div class="page-content">

                <div class="analytics">

                    <div class="card">
                        <div class="card-head">
                            <h2>107,200</h2>
                            <span class="las la-user-friends"></span>
                        </div>
                        <div class="card-progress">
                            <small>User activity this month</small>
                            <div class="card-indicator">
                                <div class="indicator one" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>340,230</h2>
                            <span class="las la-eye"></span>
                        </div>
                        <div class="card-progress">
                            <small>Page views</small>
                            <div class="card-indicator">
                                <div class="indicator two" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>$653,200</h2>
                            <span class="las la-shopping-cart"></span>
                        </div>
                        <div class="card-progress">
                            <small>Monthly revenue growth</small>
                            <div class="card-indicator">
                                <div class="indicator three" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>47,500</h2>
                            <span class="las la-envelope"></span>
                        </div>
                        <div class="card-progress">
                            <small>New E-mails received</small>
                            <div class="card-indicator">
                                <div class="indicator four" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
            <div class="container text-center">
                <div class="row">

                  <div class="col s12">

                    {{-- <h1 class="user-details-title">DETAILS DE L'UTILISATEUR</h1> --}}
                         <table class="table">
                          <tbody>
                              <tr>
                                  <th>Prénom</th>
                                  <td>{{ $user->prenom }}</td>
                              </tr>
                              <tr>
                                  <th>Nom</th>
                                  <td>{{ $user->nom }}</td>
                              </tr>
                              <tr>
                                  <th>Sexe</th>
                                  <td>{{ $user->sexe }}</td>
                              </tr>
                              <tr>
                                  <th>Téléphone</th>
                                  <td>{{ $user->telephone}}</td>
                              </tr>

                              <tr>
                                  <th>Adresse</th>
                                  <td>{{ $user->adresse }}</td>
                              </tr>
                              <tr>
                                  <th>Rôle</th>
                                  <td>{{ $user->role }}</td>
                              </tr>
                              </tbody>
                         </table>
                  </div>
                </div>
            </div>
        </main>
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
