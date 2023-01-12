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
@if($history->category === 'space')background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(https://media3.giphy.com/media/sWFYgYFjHGugleQdO7/giphy.gif?cid=ecf05e47153jnwqatv9sogs12ldfxmih8my2df6f346efh3s&rid=giphy.gif&ct=s);
background-color: rgb(0, 3, 30);@endif
@if($history->category === 'fantasy')background-image: linear-gradient(rgba(5, 5, 5, 0.6), rgba(0, 0, 0, 0.6)), url(https://media1.giphy.com/media/1gP0UvJKH9Hqc4EJAa/giphy.gif?cid=ecf05e47gjqy71bfyxjli3mylogsho5vuyyw0y6a22019yoa&rid=giphy.gif&ct=s);
    background-color: rgb(183, 2, 248);@endif
@if($history->category === 'earth')background-image: linear-gradient(rgba(2, 2, 59, 0.6), rgba(2, 2, 59, 0.6)), url(https://media1.giphy.com/media/ddHNWtQgzG8w17fnqS/giphy.gif?cid=ecf05e47vyaaa4hw8ekiytvzd8sji6k4ttn25m49lodzxqom&rid=giphy.gif&ct=s);
    background-color: rgb(95, 182, 249);@endif
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
