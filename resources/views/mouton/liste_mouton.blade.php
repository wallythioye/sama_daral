<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Liste Des Moutons</h1>
        <div class="row">
            @foreach ($moutons as $mouton)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset($mouton->photo) }}" class="card-img-top" alt="{{ $mouton->nom }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <a href="{{ route('mouton.details', $mouton->id) }}" class="btn btn-primary btn-block">Détail</a>
                        {{-- <a href="/modifier-mouton/{{ $mouton->id }}" class="btn btn-success btn-block">Modifier</a> --}}
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
.square-image {
    width: 3cm; /* Ajustez cette valeur selon vos besoins */
    height: 3cm; /* Ajustez cette valeur selon vos besoins */
    object-fit: cover; /* Assurez-vous que l'image remplit la taille spécifiée */
}
.container{
    background-color: rgba(233, 233, 10, 0.95);
}

</style>
