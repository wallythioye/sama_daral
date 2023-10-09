<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Modifier un utilisateur</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('modifier-utilisateur', ['id' => $user->id]) }}" method="POST" class="form-group">
            @csrf
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $user->prenom }}" required>
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $user->nom }}" required>
            </div>
            <div class="form-group">
                <label for="sexe">Sexe</label>
                <select class="form-control" id="sexe" name="sexe" required>
                    <option value="homme" {{ $user->sexe === 'homme' ? 'selected' : '' }}>Homme</option>
                    <option value="femme" {{ $user->sexe === 'femme' ? 'selected' : '' }}>Femme</option>
                </select>
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $user->telephone }}" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $user->adresse }}" required>
            </div>
            <div class="form-group">
                <label for="role">Rôle</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="eleveur" {{ $user->role === 'eleveur' ? 'selected' : '' }}>Éleveur</option>
                    <option value="client" {{ $user->role === 'client' ? 'selected' : '' }}>Client</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Modifier l'utilisateur</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
