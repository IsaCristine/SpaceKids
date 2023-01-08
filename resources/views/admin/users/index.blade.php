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
    <header>
        <h1>Administradores</h1>
    </header>

    <!-- Button trigger modal -->
    <div class="container create-btn">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createAdmin">
            Criar novo Administrador
        </button>
    </div>

    @include('admin.users.create')

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome do Administrador</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->name }}</th>
                        <td>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#showAdmin{{ $user->id }}""><i
                                    class="bi bi-eye"></i></button>
                            @include('admin.users.show')
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editAdmin{{ $user->id }}"><i
                                    class="bi bi-pencil-square"></i></button>
                            @include('admin.users.edit')
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAdmin{{ $user->id }}"><i
                                    class="bi bi-trash3"></i></button>
                            @include('admin.users.delete')
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>
