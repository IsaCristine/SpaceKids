<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Importa todo o Bootstrap: --}}
    @vite(['resources/js/app.js'])
    {{-- Importa o CSS utilizado na rota: --}}
    <link rel="stylesheet" href="/css/{{ $css }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>

    <div class="container">

        <div class="container create-btn">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createHistory">
                Criar nova Historia
            </button>
        </div>

        @include('admin.history.create')

        <div class="container histories-container">

            {{-- Título da seção: --}}
            <div class="theme-title">
                <p>Histórias sobre o Tema</p>
            </div>

            {{-- Barra de pesquisa: --}}
            <div class="search-bar">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
                    <button class="btn btn-secondary" type="submit">Pesquisar</button>
                </form>
            </div>

            {{-- Cards de histórias: --}}
            <div class="histories-table">
                <div class="row d-flex justify-content-between">
                    {{-- Cards de uma row: --}}
                    <div class="cards-row">

                        {{-- Cards da página --}}
                        @foreach ($histories as $history)
                            <div class="col-md-3 d-flex">
                                <div class="card card-style" style="width: 15rem; height: 17rem">
                                    <div class="card-body">
                                        <div class="btn-card">
                                            <div class="btn btn-primary disabled title-btn">
                                                <b>{{ $history->title }}</b>
                                            </div>
                                            <button data-bs-target="#showHistory{{ $history->id }}"
                                                data-bs-toggle="modal" class="btn btn-secondary">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button data-bs-target="#editHistory{{ $history->id }}"
                                                data-bs-toggle="modal" class="btn btn-primary">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button data-bs-target="#deleteHistory{{ $history->id }}"
                                                data-bs-toggle="modal" class="btn btn-danger">
                                                <i class="bi bi-trash3"></i>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @include('admin.history.show')

                            @include('admin.history.edit')

                            @include('admin.history.delete')
                        @endforeach
                        {{-- Fim dos cards de teste --}}

                    </div>
                    {{-- Paginação: --}}
                    {{ $histories->links() }}
                    {{-- Fim da Paginação --}}
                </div>
            </div>

        </div>
    </div>


</body>

</html>
