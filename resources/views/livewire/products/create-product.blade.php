<div class="row">
    <div class="col-md-7">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Informação do Produto</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="Referencia">Referência</label>
                                    <input type="text" class="form-control" id="Referencia"
                                        wire:model.defer="reference" value="">
                                    @error('reference')
                                        <span class="text-danger">O campo Referência é obrigatório.</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="Titulo">Nome do Produto</label>
                                    <input type="text" class="form-control" id="Titulo"
                                        wire:model.defer="productname" value="">
                                    @error('productname')
                                        <span class="text-danger">O campo Nome do Produto é obrigatório.</span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col-6">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="location">location</label>
                                    <input type="text" class="form-control" id="location" value="">
                                </div>
                            </div> --}}
                            <div class="col-6">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="location">localização</label>
                                    <select class="form-control" id="location" name="location"
                                        wire:model.defer="location">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="null">null</option>
                                    </select>
                                    @error('location')
                                        <span class="text-danger">O campo Localização é obrigatório.</span>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="Barcode">Barcode</label>
                                    <input type="text" class="form-control" id="Barcode" value=""
                                        wire:model.defer="barcode">
                                    @error('barcode')
                                        <span class="text-danger">O campo Barcode é obrigatório.</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="Paragrafo">Descrição</label>
                                    <textarea class="form-control" id="Paragrafo" style="min-height: 140px;" wire:model.defer="descricao"></textarea>
                                    @error('descricao')
                                        <span class="text-danger">O campo Descrição é obrigatório.</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        </div>

    </div>
    <div class="col-md-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Preços</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="Price">Preço Base</label>
                                    <input type="text" class="form-control" id="Price" value=""
                                        wire:model.defer="price">
                                    @error('price')
                                        <span class="text-danger">O campo Referência é obrigatório.</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="Sale">Desconto</label>
                                    <input type="text" class="form-control" id="Sale" value=""
                                        wire:model.defer="sale">
                                    @error('sale')
                                        <span class="text-danger">O campo Desconto é obrigatório.</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="Stock">Stock</label>
                                    <input type="text" class="form-control" id="Stock" value=""
                                        wire:model.defer="stock">
                                    @error('stock')
                                        <span class="text-danger">O campo Stock é obrigatório.</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Organização</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <div style="display: flex;justify-content: space-between;">
                                        <label class="floating-label" for="Category">Categoria</label>
                                        <a href="{{ route('category') }}" class="text-primary mb-1">ADD NEW
                                            CATEGORY</a>
                                    </div>
                                    <select class="form-control" id="Category" wire:model.defer="category">
                                        <option value="">Selecione a categoria</option>
                                        @foreach ($categories as $category)
                                            <option id="{{ $category->id }}" value="{{ $category->id }}">
                                                {{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <span class="text-danger">O campo Categoria é obrigatório.</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status"
                                        wire:model.defer="status">
                                        <option value="">Selecione o status</option>
                                        <option value="ativo">Ativo</option>
                                        <option value="inativo">Inativo</option>
                                    </select>
                                    @error('status')
                                        <span class="text-danger">O campo Status é obrigatório.</span>
                                    @enderror

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Variantes</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="Size">Tamanho</label>
                                    <input type="text" class="form-control" id="Size" value=""
                                        wire:model.defer="size">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="Color">Cores</label>
                                    <input type="text" class="form-control" id="Color" value=""
                                        wire:model.defer="color">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="Weight">Peso</label>
                                    <input type="text" class="form-control" id="Weight" value=""
                                        wire:model.defer="peso">
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
                        <button type="button" class="btn btn-primary" id="save" wire:click="save">Save Product</button>
                        <button type="button" class="btn btn-outline-secondary" wire:click="refresh()">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="z-index: 999; color:white; position:fixed;">
        @if (session('message'))
        <div class="alert alert-{{ session('status') }}" role="alert" id="successMessage">
            {{ session('message') }}
        </div>
        @endif
    </div>

    <script>
        document.addEventListener('livewire:load', function () {
            const successMessage = document.getElementById('successMessage');
            if (successMessage) {
                successMessage.style.display = 'block';
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 5000);
            }
        });
    </script>



