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



<body style="@if(request()->routeIs('space'))background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(https://media3.giphy.com/media/sWFYgYFjHGugleQdO7/giphy.gif?cid=ecf05e47153jnwqatv9sogs12ldfxmih8my2df6f346efh3s&rid=giphy.gif&ct=s);
background-color: rgb(0, 3, 30);@endif
    @if(request()->routeIs('earth'))background-image: linear-gradient(rgba(2, 2, 59, 0.6), rgba(2, 2, 59, 0.6)), url(https://media1.giphy.com/media/ddHNWtQgzG8w17fnqS/giphy.gif?cid=ecf05e47vyaaa4hw8ekiytvzd8sji6k4ttn25m49lodzxqom&rid=giphy.gif&ct=s);
    background-color: rgb(95, 182, 249);@endif
    @if(request()->routeIs('fantasy'))background-image: linear-gradient(rgba(5, 5, 5, 0.6), rgba(0, 0, 0, 0.6)), url(https://media1.giphy.com/media/1gP0UvJKH9Hqc4EJAa/giphy.gif?cid=ecf05e47gjqy71bfyxjli3mylogsho5vuyyw0y6a22019yoa&rid=giphy.gif&ct=s);
    background-color: rgb(183, 2, 248);@endif">
    {{--Container geral da página:--}}

    @include('navbar')


    <div class="container histories-container">

        {{--Título da seção:--}}
        <div class="theme-title">
            <p>Histórias sobre o Tema</p>
        </div>

        {{--Barra de pesquisa:--}}
        <div class="search-bar">
          <form class="d-flex">
            <input class="form-control me-2" type="search" name="search" placeholder="Pesquisar..." aria-label="Search">
            <button class="btn btn-secondary" type="submit">Pesquisar</button>
        </form>
        </div>

        {{--Cards de histórias:--}}
        <div class="histories-table">
            <div class="row d-flex justify-content-between">
                {{--Cards de uma row:--}}
                <div class="cards-row">

                    {{--Cards da página--}}
                    @foreach ($histories as $history)
                    <div class="col-md-3 d-flex">
                      <div class="card card-style" style="width: 15rem; height: 17rem">
                          <div class="card-body" style="background-image: url(/img/{{ $history->image }});">
                            <div class="btn-card">
                              <div class="btn btn-primary disabled title-btn"><b>{{ $history->title }}</b></div>
                              <a href="{{ route('history', $history->id) }}" class="btn btn-primary history-btn read-btn">Ler</a>
                            </div>
                          </div>
                      </div>
                    </div>
                    @endforeach
                    {{--Fim dos cards de teste--}}

                </div>
                {{--Paginação:--}}
                {{ $histories->links() }}
                {{--Fim da Paginação--}}
            </div>
        </div>

    </div>
</body>

</html>