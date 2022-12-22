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
    <div class="container histories-container">

        {{--Título da seção:--}}
        <div class="theme-title">
            <p>Histórias sobre o Tema</p>
        </div>

        {{--Barra de pesquisa:--}}
        <div class="search-bar">
            {{--Search Bar--}}
        </div>

        {{--Cards de histórias:--}}
        <div class="histories-table">
            <div class="row d-flex justify-content-center">
                {{--Cards de uma row:--}}
                <div class="cards-row">

                    {{--Card 1:--}}
                    <div class="col">
                        <div class="card card-style" style="width: 15rem; height: 18rem">
                            <div class="card-body">
                              <div class="btn-card">
                                <div class="btn btn-primary disabled title-btn"><b>Título</b></div>
                                <div class="btn btn-primary history-btn write-btn">Ler</div>
                              </div>
                            </div>
                        </div>
                    </div>
                    {{--Fim do Card 1--}}

                    {{--Card 2:--}}
                    <div class="col">
                        <div class="card card-style" style="width: 15rem; height: 18rem">
                            <div class="card-body">
                              <div class="btn-card">
                                <div class="btn btn-primary disabled title-btn"><b>Título</b></div>
                                <div class="btn btn-primary history-btn write-btn">Ler</div>
                              </div>
                            </div>
                        </div>
                    </div>

                    {{--Card 3:--}}
                    <div class="col">
                        <div class="card card-style" style="width: 15rem; height: 18rem">
                            <div class="card-body">
                              <div class="btn-card">
                                <div class="btn btn-primary disabled title-btn"><b>Título</b></div>
                                <div class="btn btn-primary history-btn write-btn">Ler</div>
                              </div>
                            </div>
                        </div>
                    </div>

                    {{--Card 4:--}}
                    <div class="col">
                        <div class="card card-style" style="width: 15rem; height: 18rem">
                            <div class="card-body">
                              <div class="btn-card">
                                <div class="btn btn-primary disabled title-btn"><b>Título</b></div>
                                <div class="btn btn-primary history-btn write-btn">Ler</div>
                              </div>
                            </div>
                        </div>
                    </div>

                    {{--Card 5:--}}
                    <div class="col">
                        <div class="card card-style" style="width: 15rem; height: 18rem">
                            <div class="card-body">
                              <div class="btn-card">
                                <div class="btn btn-primary disabled title-btn"><b>Título</b></div>
                                <div class="btn btn-primary history-btn write-btn">Ler</div>
                              </div>
                            </div>
                        </div>
                    </div>

                    {{--Card 6:--}}
                    <div class="col">
                        <div class="card card-style" style="width: 15rem; height: 18rem">
                            <div class="card-body">
                              <div class="btn-card">
                                <div class="btn btn-primary disabled title-btn"><b>Título</b></div>
                                <div class="btn btn-primary history-btn write-btn">Ler</div>
                              </div>
                            </div>
                        </div>
                    </div>

                    {{--Card 7:--}}
                    <div class="col">
                        <div class="card card-style" style="width: 15rem; height: 18rem">
                            <div class="card-body">
                              <div class="btn-card">
                                <div class="btn btn-primary disabled title-btn"><b>Título</b></div>
                                <div class="btn btn-primary history-btn write-btn">Ler</div>
                              </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</body>

</html>