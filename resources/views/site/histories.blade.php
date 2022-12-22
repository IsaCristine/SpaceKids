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
    <div class="container histories-container">

        <div class="theme-title">
            <p>Histórias sobre o Tema</p>
        </div>

        <div class="search-bar">
            {{--Search Bar--}}
        </div>

        <div class="histories-table">
            {{--Histories--}}
            <div class="row d-flex justify-content-center">
                <div class="cards-row">
                    <div class="col">
                        <div class="card" style="width: 15rem; height: 18rem">
                            <div class="card-body">
                              <div class="btn-card">
                                <div class="btn btn-primary disabled history-btn title-btn"><b>Título</b></div>
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