<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trouvez vos films préférés sur le Coin Ciné !</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pagefilm.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</head>
<body>
@include('partials.header')
<body class="fond styletext">
  <main>
    <div class="container">
        <div class="mb-5">

            <h1>Vos résultats pour la recherche : "{{ $q }}"</h1>
        </div>
        <div class="row">
        @foreach ($films as $film)
                
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 centrer littlespacingbottom" style="display: flex;justify-content: center;">
                  <div class="card border border-warning border-4" style="width: 90%;">
                      <img src="{{ asset('assets/img/'.$film->img)}}" class="card-img-top" alt="Pirates des caraïbes">
                      <div class="card-body fond styletext2">
                        <h5 class="card-title">{{ $film->title }}</h5>
                        <p><b>Catégorie :</b> {{ $film->categorie->name }}</p>
                        <p><b>Réalistateur :</b> <a href="{{ route('show.realisateur',$film ) }}">{{ $film->realisateur }} </a></p>
                        <p class="card-text"><b>Synopsis :</b> {{ $film->description }}</p>
                        <p><b>Prix :</b> {{ $film->prix }}€</p>
                        <a href="{{ route('film.show', $film) }}" class="btn btn-primary itemcentrer">Voir plus</a>
                      </div>
                    </div>
              </div>
              @endforeach  

              
              
            </div>
        </div>
    </div>
  </main>
  @include('partials.footer')
