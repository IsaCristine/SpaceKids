    <!-- Modal -->
    <div class="modal fade modal" id="createAdmin" tabindex="-1" aria-labelledby="createAdminLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Criar Novo Administrador</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('user.create') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        {{-- Form --}}
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" required class="form-control" id="name" name="name"
                                placeholder="Nome">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" required class="form-control" id="email" name="email"
                                placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" required class="form-control" id="password" name="password"
                                placeholder="Senha">
                        </div>
                        {{-- Form End --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Criar Usuário</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
