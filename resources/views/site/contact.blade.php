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

{{-- navbar --}}
<nav class="nav">
    <a class="nav__logo" href="#">
        <img src="assets/logo.png" alt=""/> </a>
    <ul class="list nav__list">
        <li class="nav__item">
            <a class="nav__link" href="#">Inicio</a>
        </li>
        <li class="nav__item">
            <a class="nav__link" href="#">Espaço</a>
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

{{--Container geral da página:--}}
<div class="container contact-container">

    {{--Título da seção:--}}
    <div class="theme-title">
        <p>Envie-nos uma Mensagem!</p>
    </div>

    {{--  Contact form  --}}
    <div class="background">
        <form class="form-contact" action="" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input
                    class="form-control input__name"
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Digite seu nome"
                    required
                    minlength="5"
                    maxlength="100"
                    autofocus
                />
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input
                    class="form-control input__email"
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Digite seu e-mail"
                    required
                    maxlength="100"

                />
            </div>

            <div class="form-group">
                <label for="assunto">Assunto</label>
                <input
                    class="form-control input__subject"
                    type="text"
                    name="assunto"
                    id="assunto"
                    placeholder="Digite o assunto"
                    required
                    maxlength="100"
                />
            </div>
            <div class="form-group">
                <label for="mensagem">Mensagem</label>
                <textarea
                    class="form-control input__message"
                    id="mensagem" name="mensagem"
                    placeholder="Digite sua mensagem"
                    required
                    maxlength="512"
                ></textarea>
            </div>
        </form>
    </div>

    {{--Botão de envio:--}}
    <div class="button-container">
        <button class="btn btn--contact" type="submit">Enviar</button>
    </div>

</div>


</body>

</html>
