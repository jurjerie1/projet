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
    <link rel="stylesheet" href="{{ asset('assets/css/profil.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

</head>
<body class="fond styletext2">
@include('partials.header')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="background">
                        <h1>
                            Profil
                        </h1>
                        <div>
                            <h2>
                                Informations utilisateur
                            </h2>
                            <div>
                                <h3>Nom d'utilisateur</h2>
                                    <p>{{ $user->name }}</p>
                            </div>
                            
                            <div>
                                <h3>E-mail</h2>
                                    <p>{{ $user->email }}</p>
                            </div>
                        </div>
                        <div>
                            <h2>
                                Informations bancaires
                            </h2>
                            <div>
                                <h3>Payer avec</h3>
                                    <p>Carte se terminant par 0000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@include('partials.footer')
