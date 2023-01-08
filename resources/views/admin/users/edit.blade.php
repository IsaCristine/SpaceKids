    <!-- Modal -->
    <div class="modal fade modal" id="editAdmin{{ $user->id }}" tabindex="-1" aria-labelledby="editAdminLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Administrador</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('user.edit', $user->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="modal-body">
                        {{-- Form --}}
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" required class="form-control" id="name" name="name"
                                placeholder="Nome" value="{{ old('name', $user->name) }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" required class="form-control" id="email" name="email"
                                placeholder="Email" value="{{ old('email', $user->email) }}">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" required class="form-control" id="password" name="password"
                                placeholder="Senha" value="{{ old('password', $user->password) }} ">
                        </div>
                        {{-- Form End --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Editar Usuário</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
