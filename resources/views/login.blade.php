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

    <title>Login</title>
</head>


<body>

{{-- navbar --}}
@include('navbar')

{{--Container geral da página:--}}
<div class="container login-container">

    <div class="background background-login">
        {{-- main grid with a logo on the left and a form for login on the right--}}
        <div class="grid">
            <div class="logo">
                <img src="assets/logo.png" alt="Logo">
            </div>
            <form class="form-login" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input
                        class="form-control"
                        id="email"
                        type="email"
                        name="email"
                        placeholder="Endereço de e-mail"
                        minlength="5"
                        maxlength="255"
                        required
                        autofocus
                    />
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input
                        class="form-control"
                        id="password"
                        type="password"
                        name="password"
                        placeholder="Password"
                        required
                        maxlength="255"
                    />
                </div>
                <div class="button-container">
                    <button class="btn">Entrar</button>
                </div>
            </form>
        </div>
    </div>

</div>


</body>

</html>