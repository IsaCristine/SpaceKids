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

        @foreach ($histories as $history)
            <div style="width: 40%; padding: 4rem">
                <div class="card card--editor">
                    <header class="card__header">
                        <img class="card__image" src="images/logo.png" alt="">
                    </header>
                    <div class="card__body">
                        {{ $history->title }}
                    </div>

                    <div class="d-flex justify-center">
                        <footer class="card__footer">
                            <button data-bs-target="#showHistory{{ $history->id }}" data-bs-toggle="modal" class="btn btn-secondary">
                                <i class="bi bi-eye"></i>
                            </button>
                            @include('admin.history.show')
                            <button data-bs-target="#editHistory{{ $history->id }}" data-bs-toggle="modal" class="btn btn-primary">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            @include('admin.history.edit')
                            <button data-bs-target="#deleteHistory{{ $history->id }}" data-bs-toggle="modal" class="btn btn-danger">
                                <i class="bi bi-trash3"></i>
                            </button>
                            @include('admin.history.delete')
                        </footer>
                    </div>

                </div>
            </div>
        @endforeach

    </div>

</body>

</html>
