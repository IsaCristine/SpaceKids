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

    <title>Historias</title>
</head>


<body style=" 
@if($history->category === 'space')background-image: url(../../assets/home_bg.gif)@endif
@if($history->category === 'fantasy')background-image: url(https://media0.giphy.com/media/1gP0UvJKH9Hqc4EJAa/giphy.gif?cid=790b76111c04eed00b973fd2369516a7f09606f9cdef5b74&rid=giphy.gif&ct=s); background-color: #000000;@endif
@if($history->category === 'earth')background-image: url(../../assets/home_bg.gif)@endif
"> 

    @include('navbar')

    {{-- Container geral da página: --}}
    <div class="container history_container">
        <div class="row align-items-center justify-content-center history_body">
            <div class="col d-flex justify-content-center">
                <img src="/img/{{ $history->image }}" alt="Gif de um planeta colorido" class="history_gif">
            </div>
            <div class="col history_text">
                <h1 class="history_title">{{ $history->title }}</h1>
                <h4 class="history_authory">{{ $history->origin }}</h4>

                <p>{{ $history->paragraph1 }}
                </p>
                <p>{{ $history->paragraph2 }}
                </p>
                <p>{{ $history->paragraph3 }}
                </p>

                <a href="javascript:history.back()" class="btn btn-primary back-btnn">Voltar</a>
            </div>
        </div>
    </div>
</body>

</html>
