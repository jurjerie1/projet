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
    <link rel="stylesheet" href="{{ asset('assets/css/panier.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

</head>
<body>
@include('partials.header')
    <main>
    <div class="container styletext">
        <table class="table styletext">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Titre</th>
      <th scope="col">Prix</th>
    </tr>
  </thead>
  <tbody>
    @php 
    $tt = 0;
    @endphp
    @foreach ($paniers as $product)
      @php 
        $tt += $product->film->prix;
      @endphp
    
        
    <tr>
      <th scope="row">{{ $product->film->id }}</th>
      <td><img src="{{ asset('assets/img/'.$product->film->img)}}" alt="image du film" height="100px"></td>
      <td>{{ $product->film->title }}</td>
      <td>{{ $product->film->prix }} €</td>
      <td><a href="{{ route('panier.remove', $product) }}" class="btn" style="color:black;background-color: var(--primary-color)">Supprimer</a></td>
    </tr>
    @endforeach
    <tr>
    
        <td>Tatal du panier : {{ $tt }} €</td>
    </tr>
    
  </tbody>
</table>
<td><a href="{{ route('panier.remove.all') }}" class="btn btn-danger">Vider le panier</a></td>

    </div>
  </main>
  @include('partials.footer')
