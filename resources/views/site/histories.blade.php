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



<body>
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
            <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
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
                          <div class="card-body">
                            <div class="btn-card">
                              <div class="btn btn-primary disabled title-btn"><b>{{ $history->title }}</b></div>
                              <div class="btn btn-primary history-btn read-btn">Ler</div>
                            </div>
                          </div>
                      </div>
                    </div>
                    @endforeach
                    {{--Fim dos cards de teste--}}

                </div>
                {{--Paginação:--}}
                {{ $histories->appends([
                    'search' => request('search'),
                ])->links() }}
                {{--Fim da Paginação--}}
            </div>
        </div>

    </div>
</body>

</html>