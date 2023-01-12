    <!-- Modal -->
    <div class="modal fade modal" id="showHistory{{ $history->id }}" tabindex="-1" aria-labelledby="showHistoryLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Visualizar História</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('history.create') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        {{-- Form --}}
                        <div class="mb-3">
                            <label for="name" class="form-label">Título</label>
                            <input disabled type="text" required class="form-control" id="title" name="title"
                                placeholder="Nome" value="{{ $history->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Categoria</label>
                            <select disabled class="form-select" aria-label="Default select example" name="category">
                                <option selected>{{ $history->category }}</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Parágrafo 1</label>
                            <textarea class="form-control" id="paragraph1" name="paragraph1" rows="3" disabled>{{ $history->paragraph1 }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Parágrafo 2</label>
                            <textarea class="form-control" id="paragraph2" name="paragraph2" rows="3" disabled>{{ $history->paragraph2 }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Parágrafo 3</label>
                            <textarea class="form-control" id="paragraph3" name="paragraph3" rows="3" disabled>{{ $history->paragraph3 }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Origem</label>
                            <textarea class="form-control" id="origin" name="origin" rows="3" disabled>{{ $history->origin }}</textarea>
                        </div>


                        {{-- Form End --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
