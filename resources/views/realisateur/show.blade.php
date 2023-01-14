<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trouvez vos films préférés sur le Coin Ciné !</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</head>
<body>
    
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('panier.index') }}">pannier</a>
                </li>
                @endauth

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
                </ul>
                <form class="d-flex" method="" action="{{ route('film.shearch') }}">
                <input class="form-control me-2" type="text" placeholder="Rechercher un film ..." name="q">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            </div>
        </nav>

        <div class="row">
            <div class=" col-4 col-sm-6">
                @foreach ($films as $film)
                    
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('assets/img/'.$film->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $film->title }}</h5>
                      <p class="card-text">Réalisateur : <a href=""> {{ $film->realisateur }}</a></p>
                      <p class="card-text">acteurs :
                        @foreach ($film->acteurs as $acteur)
                            {{ $acteur->name}},
                        @endforeach
                      </p>

                      <a href="{{ route('film.show', $film) }}" class="btn btn-primary">Voir plus</a>
                    </div>
                  </div>
                @endforeach

            </div>  
            
        </div>
        {{ $films->links() }}

        
          


    </div>
</body>
</html>