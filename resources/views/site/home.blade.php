<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--Importa todo o Bootstrap:--}}
    @vite(['resources/js/app.js'])
    {{--Importa o CSS utilizado na rota:--}}
    <link rel="stylesheet" href="/css/site/navbar.css">
    <link rel="stylesheet" href="/css/{{$css}}">	

    <title>Inicio</title>
</head>



<body>

    @include('navbar')

    {{--Container geral da página:--}}
    <div class="container home_container">
        <div class="row align-items-center justify-content-center home_body">
            <div class="col d-flex justify-content-center">
                <img src="assets/colored_planet.gif" alt="Gif de um planeta colorido" class="home_gif">
            </div>
            <div class="col home_text">
                <p>Um site para crianças explorarem o Universo e expandirem suas mentes</p>

                <a href="{{ route('space') }}" class="btn btn-primary home-btn"><b>Iniciar</b></a>
            </div>
        </div>
    </div>
</body>

</html>