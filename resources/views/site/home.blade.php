<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--Importa todo o Bootstrap:--}}
    @vite(['resources/js/app.js'])
    {{--Importa o CSS utilizado na rota:--}}
    <link rel="stylesheet" href="/css/{{$css}}">
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="css/normalize.css" />
    <title>Inicio</title>
</head>


<body>
    <nav class="nav">
        <a class="nav__logo" href="#">
            <img src="../assets/logo.png" alt=""/> </a>
        <ul class="list nav__list">
            <li class="nav__item">
                <a class="nav__link" href="#">Inicio</a>
            </li>
            <li class="nav__item">
                <a class="nav__link" href="#">Espaco</a>
            </li>
            <li class="nav__item">
                <a class="nav__link" href="#">Terra</a>
            </li>
            <li class="nav__item">
                <a class="nav__link" href="#">Fantasia</a>
            </li>
            <li class="nav__item">
                <a class="nav__link" href="#">Contato</a>
            </li>
            <li class="nav__item">
                <a class="nav__link" href="#">Login</a>
            </li>
        </ul>
    </nav>

    <div class="container home_container">
        <div class="row align-items-center justify-content-center home_body">
            <div class="col d-flex justify-content-center">
                <img src="assets/colored_planet.gif" alt="Gif de um planeta colorido" class="home_gif">
            </div>
            <div class="col home_text">
                <p>Um site para crianças explorarem o Universo e expandirem suas mentes</p>
            </div>
        </div>
    </div>
</body>

</html>
