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
        

        @for ($i = 0; $i < 10; $i++)
            <div style="width: 40%; padding: 4rem">
                <div class="card card--editor">
                    <header class="card__header">
                        <img class="card__image" src="images/logo.png" alt="">
                    </header>
                    <div class="card__body">
                        Lorem ipsum
                    </div>

                    <div class="d-flex justify-center">
                        <footer class="card__footer">
                            <button class="btn btn-secondary">
                                <i class="bi bi-eye"></i>
                            </button>
                            <button class="btn btn-primary">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button class="btn btn-danger">
                                <i class="bi bi-trash3"></i>
                            </button>
                        </footer>
                    </div>

                </div>
            </div>
        @endfor

    </div>

</body>

</html>
