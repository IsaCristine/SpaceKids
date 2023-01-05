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
                    <?php for($i = 0; $i < 8; $i++): ?>
                    <div class="col-md-3 d-flex">
                      <div class="card card-style" style="width: 15rem; height: 17rem">
                          <div class="card-body">
                            <div class="btn-card">
                              <div class="btn btn-primary disabled title-btn"><b>Título</b></div>
                              <div class="btn btn-primary history-btn read-btn">Ler</div>
                            </div>
                          </div>
                      </div>
                    </div>
                    <?php endfor; ?>
                    {{--Fim dos cards de teste--}}

                </div>
                {{--Paginação:--}}
                <div class="pagination">
                  <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item disabled">
                          <a class="page-link">Voltar</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Avançar</a>
                        </li>
                      </ul>
                    </nav>
              </div>
                {{--Fim da Paginação--}}
            </div>
        </div>

    </div>
</body>

</html>