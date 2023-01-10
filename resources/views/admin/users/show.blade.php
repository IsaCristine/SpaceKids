    <!-- Modal -->
    <div class="modal fade modal" id="showAdmin{{ $user->id }}" tabindex="-1" aria-labelledby="showAdminLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Visualizar Administrador</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- Form --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input disabled type="text" required class="form-control" id="name" name="name"
                            placeholder="Nome" value="{{ $user->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input disabled type="email" required class="form-control" id="email" name="email"
                            placeholder="Email" value="{{ $user->email }}">
                    </div>
                    {{--
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input disabled type="password" required class="form-control" id="password" name="password" placeholder="Senha">
                        </div>
                    {{-- Form End --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
