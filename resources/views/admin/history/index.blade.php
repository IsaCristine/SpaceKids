<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Importa todo o Bootstrap: --}}
    @vite(['resources/js/app.js'])
    {{-- Importa o CSS utilizado na rota: --}}
    <link rel="stylesheet" href="/css/admin/sidebar.css">
    <link rel="stylesheet" href="/css/{{ $css }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>

    @include('admin.sidebar')

    <div class="container">


        <div class="container admin-page">

            {{-- Título da seção: --}}
            @if (request()->routeIs('space.index'))
                <div class="theme-title">
                    <p>Histórias sobre Espaço</p>
                </div>
            @endif
            @if (request()->routeIs('earth.index'))
                <div class="theme-title">
                    <p>Histórias sobre Terra</p>
                </div>
            @endif
            @if (request()->routeIs('fantasy.index'))
                <div class="theme-title">
                    <p>Histórias sobre Fantasia</p>
                </div>
            @endif

            {{-- Barra de pesquisa: --}}
            <div class="top-page row">
                <div class="col search-bar">
                    <form class="d-flex">
                        <input class="form-control me-2 search" type="search" placeholder="Pesquisar"
                            aria-label="Search">
                        <button class="btn btn-secondary btn-search" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>

                @include('admin.history.create')
                <!-- Button trigger modal -->
                <div class="col container create-btn">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#createHistory">
                        Adicionar <i class="bi bi-plus-circle"></i>
                    </button>
                </div>
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
                                    <div class="card-body" style="background-image: url(/img/{{ $history->image }})">
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
