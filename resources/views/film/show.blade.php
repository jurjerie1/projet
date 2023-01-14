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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</head>
<body class="fond styletext">
@include('partials.header')
  <main>
    <div class="container">
        <div class="centrer">
            <h1>Info du Film</h1>
        </div>
        <div class="row tinyspacingtop littlespacingbottom">
            <div class="col-4">
                <img src="{{ asset('assets/img/'.$film->img)}}" style="width: 90%;" alt="">
            </div>
            <div class="col-6 styletext2 tinyspacingtop">
                <h2 class="fontlight tspaciinyngtop">Titre : {{ $film->title }}</h2>
                <h2 class="fontlight tinyspacingtop">Catégorie : {{ $film->categorie->name }}</h2>
                <h2 class="fontlight tinyspacingtop">Réalistateur : <a href="{{ route('show.realisateur',$film ) }}">{{ $film->realisateur }}</a></h2>
                <h2 class="fontlight tinyspacingtop littlespacingbottom">Acteurs : 
                    @foreach ($film->acteurs as $acteur)
                        {{ $acteur->name }}
                    @endforeach
                </h2>
                <p><b>Synopsis :</b> {{ $film->description }}</p>
                <a href="{{ route('panier.add', $film) }}"  class="btn littlespacingtop" style="color:black;background-color: var(--primary-color);padding-right: 5%;padding-left: 5%;">Ajouter au Panier ({{ $film->prix }}€)</a>
            </div>

        </div>
    </div>
  </main>
@include('partials.footer')