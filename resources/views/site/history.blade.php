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

    <title>View História</title>
</head>



<body>

    @include('navbar')

    {{--Container geral da página:--}}
    <div class="container history_container">
        <div class="row align-items-center justify-content-center history_body">
            <div class="col d-flex justify-content-center">
                <img src="assets/colored_planet.gif" alt="Gif de um planeta colorido" class="history_gif">
            </div>
            <div class="col history_text">
                <h1 class="history_title">Título da História</h1>
                <h4 class="history_autory">Autor</h4>

                <p>TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto
                    TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto
                    TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto
                    TextoTextoTextoTexto
                </p>
                <p>TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto
                    TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto
                    TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto
                    TextoTextoTextoTexto
                </p>
                <p>TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto
                    TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto
                    TextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTextoTexto
                    TextoTextoTextoTexto
                </p>

                <button type="button" class="btn btn-primary back-btnn">Voltar</button>
            </div>
        </div>
    </div>
</body>

</html>