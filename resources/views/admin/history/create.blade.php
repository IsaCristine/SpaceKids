    <!-- Modal -->
    <div class="modal fade modal" id="createHistory" tabindex="-1" aria-labelledby="createHistoryLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Criar Novo Administrador</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('history.create') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        {{-- Form --}}
                        <div class="mb-3">
                            <label for="name" class="form-label">Título</label>
                            <input type="text" required class="form-control" id="title" name="title"
                                placeholder="Nome">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Categoria</label>
                            <select class="form-select" aria-label="Default select example" name="category">
                                <option selected>Selecione uma categoria</option>
                                <option value="Space">Espaço</option>
                                <option value="Fantasy">Fantasia</option>
                                <option value="Earth">Terra</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Parágrafo 1</label>
                            <textarea class="form-control" id="paragraph1" name="paragraph1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Parágrafo 2</label>
                            <textarea class="form-control" id="paragraph2" name="paragraph2" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Parágrafo 3</label>
                            <textarea class="form-control" id="paragraph3" name="paragraph3" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Origem</label>
                            <textarea class="form-control" id="origin" name="origin" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">Imagem</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>


                        {{-- Form End --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Criar História</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
