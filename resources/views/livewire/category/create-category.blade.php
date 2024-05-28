<style>
    .modal {
    display: none; /* Oculto por padrão */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5); /* Fundo escurecido */
    justify-content: center;
    align-items: center;
    animation: fadeIn 0.3s; /* Animação de entrada */
}

/* Conteúdo do modal */
.modal-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    width: 80%;
    max-width: 500px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    animation: slideIn 0.3s; /* Animação de entrada */
}

.modal-footer {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding: 20px 20px;
    border-top: 1px solid #e3eaef;
    border-bottom-right-radius: 2px;
    border-bottom-left-radius: 2px;
    
}

.modal-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    padding: 20px 20px;
    border-bottom: 1px solid #e3eaef;
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
}
/* Botão de fechar */
.close {
    float: right;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .5;
}


/* Animação de entrada do modal */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideIn {
    from { transform: translateY(-20px); }
    to { transform: translateY(0); }
}
</style>
<div class="row">
    <div class="col-md-7">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Category information</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="Titulo">Título</label>
                                    <input type="text" class="form-control" id="Titulo"  value="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="Titulo">SLUG</label>
                                    <input type="text" class="form-control" id="Titulo"  value="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group text-left">
                                    <label for="status">Select Category Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="ativo">Ativo</option>
                                        <option value="inativo">Inativo</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="Paragrafo">Description</label>
                                    <textarea class="form-control" id="Paragrafo" style="min-height: 140px;"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
    <div class="col-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Media</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="form-control" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Variants</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <div style="display: flex;justify-content: space-between;">
                                        <label class="floating-label" for="Category">Parent Category</label>
                                        <a href="#" class="text-primary mb-1" id="openModalLink">ADD NEW PARENT CATEGORY</a> 
                                    </div>
                                    <div id="modal" class="modal">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add New Parent Category</h5>
                                            <button type="button" class="close close-modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">Título:</label>
												<input type="text" class="form-control" id="recipient-name">
											</div>
                                            <div class="form-group">
												<label for="recipient-name" class="col-form-label">SLUG:</label>
												<input type="text" class="form-control" id="recipient-name">
											</div>
                                                <div class="form-group text-left">
                                                    <label for="status">Select Category Status</label>
                                                    <select class="form-control" id="status" name="status">
                                                        <option value="ativo">Ativo</option>
                                                        <option value="inativo">Inativo</option>
                                                    </select>
                                                </div>
											<div class="form-group">
												<label for="message-text" class="col-form-label">Description:</label>
												<textarea class="form-control" id="message-text"></textarea>
											</div>
										</form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary close-modal">Close</button>
                                            <button type="button" class="btn btn-primary" style="background-color:#1abc9c; border:none;">Send message</button>
                                        </div>
                                    </div>
                                </div>

                                    <select class="form-control" id="status" name="status">
                                        <option value="">Select parent category</option>

                                        <option value="Telemóveis">Telemóveis</option>
                                        <option value="Tablets">Tablets</option>
                                        <option value="Headsets">Headsets</option>
                                        <option value="TV e Som">TV e Som</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-right">
                        <button type="button" class="btn  btn-primary" wire:click="save()">Save Category</button>
                        <button type="button" class="btn  btn-outline-secondary">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
   document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("modal");
    const openModalLink = document.getElementById("openModalLink");
    const closeModalButtons = document.querySelectorAll(".close-modal");

    // Abrir modal ao clicar no link
    openModalLink.addEventListener("click", (event) => {
        event.preventDefault(); // Prevenir o comportamento padrão do link
        modal.style.display = "flex";
    });

    // Fechar modal ao clicar nos botões de fechar
    closeModalButtons.forEach(button => {
        button.addEventListener("click", () => {
            modal.style.display = "none";
        });
    });

    // Fechar modal ao clicar fora do conteúdo do modal
    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});
</script>