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
    <link rel="stylesheet" href="/css/admin/dashboard.css">
    <link rel="stylesheet" href="/css/{{$css}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Historias</title>
</head>


<body>


    @include('admin.sidebar')


{{--Container geral da página:--}}
<div class="container adm-container" data-nav-visible="false">

    {{--Título da seção:--}}
    <div class="theme-title">
        <p>Bem-vindo(a), Administrador!</p>
    </div>
    
    {{--Cards:--}}
    <div class="grid">
        <div class="card card--admin">
            <header class="card__header">
                <img class="card__image" src="../img/black_hole.gif" alt="">
            </header>
            <div class="card__line"></div>
            <div class="card__body">
                <h2 class="card__title">Espaço </h2>
            </div>
            <div class="btn-container">
                <a href="{{ route('space.index') }}" class="btn btn--entrar">Entrar</a>
            </div>
        </div>

        <div class="card card--admin">
            <header class="card__header">
                <img class="card__image" src="../img/earth_1.gif" alt="">
            </header>
            <div class="card__line"></div>
            <div class="card__body">
                <h2 class="card__title">Terra</h2>
            </div>
            <div class="btn-container">
                <a href="{{ route('earth.index') }}" class="btn btn--entrar">Entrar</a>
            </div>
        </div>

        <div class="card card--admin">
            <header class="card__header">
                <img class="card__image" src="../img/fantasy_1.gif" alt="">
            </header>
            <div class="card__line"></div>
            <div class="card__body">
                <h2 class="card__title">Fantasia</h2>
            </div>
            <div class="btn-container">
                <a href="{{ route('fantasy.index') }}" class="btn btn--entrar">Entrar</a>
            </div>
        </div>

        <div class="card card--admin">
            <header class="card__header">
                <img class="card__image" src="../img/universe.gif" alt="">
            </header>
            <div class="card__line"></div>
            <div class="card__body">
                <h2 class="card__title">Administradores</h2>
            </div>
            <div class="btn-container">
                <a href="{{ route('user.index') }}" class="btn btn--entrar">Entrar</a>
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
                <a href="{{ route('logout') }}" class="btn btn--logout">Sair</a>
            </div>
        </div>
    </div>

</div>


</div>

</body>

</html>
