    <!-- Modal -->
    <div class="modal fade modal" id="deleteHistory{{ $history->id }}" tabindex="-1" aria-labelledby="deleteHistoryLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar Administrador</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-delete d-inline-block" action="{{ route('history.delete', $history->id) }}" method="post">
                    <div class="modal-body">
                        <p>Tem certeza que deseja deletar a história <strong>{{ $history->name }}?</strong>?</p>

                        @csrf
                        @method('delete')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-danger">Excluir Usuário</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
