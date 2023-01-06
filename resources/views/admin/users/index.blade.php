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

    <div class="container">
        <table class="table table-dark table-striped">
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
                            <a href="{{ route('admin.user.show', $user->id) }}" class="btn btn-secondary"><i class="bi bi-eye"></i></a>
                            <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                            <a href="{{ route('admin.user.delete', $user->id) }}" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                @endforeach

                {{-- Example Itens --}}
                @for ($i = 0; $i < 10; $i++)
                <tr>
                    <th scope="row">{{ $i.$i.$i.$i.$i.$i }}</th>
                    <td> <a href="{{-- {{ route('admin.user.show', $user->id) }} --}}" class="btn btn-secondary"><i class="bi bi-eye"></i></a>
                        <a href="{{-- {{ route('admin.user.edit', $user->id) }} --}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                        <a href="{{-- {{ route('admin.user.delete', $user->id) }} --}}" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                    </td>
                </tr>
                @endfor
                {{-- Example End --}}
                
               
            </tbody>
        </table>
    </div>
</body>

</html>
