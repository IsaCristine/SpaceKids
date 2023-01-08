<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--Importa todo o Bootstrap:--}}
    @vite(['resources/js/app.js'])
    @vite(['resources/js/nav.js'])

    {{--Importa o CSS utilizado na rota:--}}
    <link rel="stylesheet" href="/css/{{$css}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Historias</title>
</head>


<body>

<button class="nav-toggle" aria-controls="primary-navigation" aria-expanded="false">
    <i class="fas fa-bars"></i>
</button>


{{-- navbar --}}
<nav>
{{--    <div class="logo-container" data-nav-visible="false">--}}
{{--        <img src="assets/logo.png" class="logo" alt="logo">--}}
{{--    </div>--}}
    <ul id="primary-navigation" data-visible="false" class="primary-navigation flex">
        <li class="active">
            <a href="#" class="btn btn--entrar">Espaco</a>
        </li>
        <li class="active">
            <a href="#" class="btn btn--entrar">Terra</a>
        </li>
        <li class="active">
            <a href="#" class="btn btn--entrar">Fantasia</a>
        </li>
        <li class="active">
            <a href="#" class="btn btn--entrar">Administradores</a>
        </li>
        <li class="active">
            <a href="#" class="btn btn--logout">Sair</a>
        </li>
    </ul>
</nav>


{{--Container geral da página:--}}
<div class="container adm-container" data-nav-visible="false">

    {{--Título da seção:--}}
    <div class="theme-title">
        <p>Bem-vindo(a), administrador!</p>
    </div>


    {{-- page with cards arranged in a grid, each card should contain a picture on top, follow by a title and a button to access--}}
    <div class="grid">
        <div class="card card--admin">
            <header class="card__header">
                <img class="card__image" src="assets/logo.png" alt="">
            </header>
            <div class="card__line"></div>
            <div class="card__body">
                <h2 class="card__title">Espaço </h2>
            </div>
            <div class="btn-container">
                <button class="btn btn--entrar">Entrar</button>
            </div>
        </div>

        <div class="card card--admin">
            <header class="card__header">
                <img class="card__image" src="assets/logo.png" alt="">
            </header>
            <div class="card__line"></div>
            <div class="card__body">
                <h2 class="card__title">Terra</h2>
            </div>
            <div class="btn-container">
                <button class="btn btn--entrar">Entrar</button>
            </div>
        </div>

        <div class="card card--admin">
            <header class="card__header">
                <img class="card__image" src="assets/logo.png" alt="">
            </header>
            <div class="card__line"></div>
            <div class="card__body">
                <h2 class="card__title">Fantasia</h2>
            </div>
            <div class="btn-container">
                <button class="btn btn--entrar">Entrar</button>
            </div>
        </div>

        <div class="card card--admin">
            <header class="card__header">
                <img class="card__image" src="assets/logo.png" alt="">
            </header>
            <div class="card__line"></div>
            <div class="card__body">
                <h2 class="card__title">Administradores</h2>
            </div>
            <div class="btn-container">
                <button class="btn btn--entrar">Entrar</button>
            </div>
        </div>

        <div class="card card--admin">
            <header class="card__header">
                <img class="card__image" src="assets/logo.png" alt="">
            </header>
            <div class="card__line"></div>
            <div class="card__body">
                <h2 class="card__title">Logout</h2>
            </div>
            <div class="btn-container">
                <button class="btn btn--logout">Sair</button>
            </div>
        </div>
    </div>

</div>


</div>

</body>

</html>
