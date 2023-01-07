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

    <title>Historias</title>
</head>


<body>

{{--Container geral da página:--}}
<div class="container login-container">

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


</div>


</body>

</html>
