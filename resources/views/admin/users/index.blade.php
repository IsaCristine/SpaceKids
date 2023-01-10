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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>

    @include('admin.sidebar')

    <div class="container admin-page">
        
        <header class="col">
            <h1 class="title">Administradores</h1>
        </header>
        
        <div class="top-page row">
            <div class="col search-bar">
                <form class="d-flex">
                    <input class="form-control me-2 search" type="search" name="search" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-secondary btn-search" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>
        
            <!-- Button trigger modal -->
            <div class="col container create-btn">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createAdmin">
                    Adicionar <i class="bi bi-plus-circle"></i>
                </button>
            </div>
        </div>
    
        @include('admin.users.create')

            <table class="table table-striped users-table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->name }}</th>
                            <td>
                                <div class="all-btn-table">
                                    <button type="button" class="btn btn-secondary btn-table" data-bs-toggle="modal" data-bs-target="#showAdmin{{ $user->id }}"><i
                                        class="bi bi-eye"></i></button>
                                    @include('admin.users.show')
                                    <button type="button" class="btn btn-primary btn-table" data-bs-toggle="modal" data-bs-target="#editAdmin{{ $user->id }}"><i
                                        class="bi bi-pencil-square"></i></button>
                                    @include('admin.users.edit')
                                    <button type="button" class="btn btn-danger btn-table" data-bs-toggle="modal" data-bs-target="#deleteAdmin{{ $user->id }}"><i
                                        class="bi bi-trash3"></i></button>
                                    @include('admin.users.delete')
                                </div>
                            </td>
                        </tr>
                    @endforeach
    
                </tbody>
            </table>
    
            <div class="container d-flex justify-content-center">
                {{ $users->appends([
                        'search' => request()->get('search', ''),
                    ])->links() }}
            </div>
    
    </div>
</body>

</html>
