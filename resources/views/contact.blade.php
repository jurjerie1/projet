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
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

</head>

<body class="fond styletext">  
@include('partials.header')

<main>
    <div class="container centrer littlespacingbottom littlespacingtop">
        <h1 class="littlespacingbottom"> Pour nous joindre : </h1>
        <div>
            <h2>Téléphone : <a href="tel:+33681313690">06 81 31 36 90</a></h2>
            <h2>Mail : <a href="mailto:leonard.treve@supinfo.com">LeCineCoin@gmail.com</a></h2>
        </div>
    </div>
</main>
@include('partials.footer')
