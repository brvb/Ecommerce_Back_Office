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
                            <div class="col-6">
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
            
  
        </div>

    </div>
    <div class="col-md-5">
        <div class="row">
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
            
        </div>
        
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Variantes</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group text-left">
                            <label class="floating-label" for="Size">Tamanho</label>
                            <input type="text" class="form-control" id="Size" value=""
                                wire:model.defer="VariantsSize">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group text-left">
                            <label class="floating-label" for="Color">Cores</label>
                            <input type="text" class="form-control" id="Color" value=""
                                wire:model.defer="VariantsColor">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group text-left">
                            <label class="floating-label" for="Weight">Peso</label>
                            <input type="text" class="form-control" id="Weight" value=""
                                wire:model.defer="VariantsWeight">
                        </div>
                    </div>
                    
                    <div class="col-2">
                        <div class="form-group text-left">
                            <label class="floating-label" for="Stock">Stock</label>
                            <input type="text" class="form-control" id="Stock" value="" wire:model.defer="VariantsStock">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group text-left">
                            <label class="floating-label" for="Media">Media</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form-control" id="inputGroupFile01" wire:model="image">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-2">
                        <div class="form-group text-left">
                            <label class="floating-label" for="Amount">Preço</label>
                            <input type="text" class="form-control" id="Amount" value="" wire:model.defer="VariantsPrice">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group text-left">
                            <label class="floating-label" for="sale">Sale</label>
                            <input type="text" class="form-control" id="sale" value="" wire:model.defer="VariantsSale">
                        </div>
                    </div>
                    <div class="col-2" style="display: flex;align-items: flex-end;justify-content: flex-end;">
                        <div class="form-group text-left">
                            <button class="btn btn-primary" wire:click='addVariants()'>
                                +
                            </button>
                        </div>
                    </div>
                    @if ($hasImageProduct)
                        @foreach ($hasImageProduct as $index => $image)
                            <div class="col-2">
                                <div wire:loading wire:target="hasImageProduct">
                                    Carregando...
                                </div>
                                <img wire:loading.remove src="{{ $image['image_file'] ? $image['image_file']->temporaryUrl() : '' }}" class="img-fluid">
                            </div>
                        @endforeach
                    @endif

                    @if ($hasVariantsProduct)
                        @foreach ($hasVariantsProduct as $index => $product)
                            <div class="col-12" id="variant-{{ $index }}">
                                
                                <div class="row">
                                    <div class="col-12">
                                        <hr>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group text-left">
                                            <label class="floating-label" for="Size">Tamanho</label>
                                            <input type="text" class="form-control" id="Size" value="{{ $product['size'] }}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group text-left">
                                            <label class="floating-label" for="Color">Cores</label>
                                            <input type="text" class="form-control" id="Color" value="{{ $product['color'] }}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group text-left">
                                            <label class="floating-label" for="Weight">Peso</label>
                                            <input type="text" class="form-control" id="Weight" value="{{ $product['weight'] }}">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group text-left">
                                            <label class="floating-label" for="stock">Stock</label>
                                            <input type="text" class="form-control" id="stock" value="{{ $product['stock'] }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group text-left">
                                            <label class="floating-label" for="Media">Media</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="form-control" id="Media">
                                                    <label class="custom-file-label" for="Media">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group text-left">
                                            <label class="floating-label" for="price">Preço</label>
                                            <input type="text" class="form-control" id="price" value="{{ $product['price'] }}">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group text-left">
                                            <label class="floating-label" for="Sale">Sale</label>
                                            <input type="text" class="form-control" id="Sale" value="{{ $product['sale'] }}">
                                        </div>
                                    </div>
                                    <div class="col-2" style="display: flex;align-items: flex-end;justify-content: flex-end;">
                                        <div class="form-group text-left">
                                            <button class="btn btn-primary" wire:click='removeVariants({{ $index }})'>
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    @if ($product['imageArry'])
                                        @foreach ($product['imageArry'] as $index => $image)
                                            <div class="col-2">
                                             
                                                <img  src="{{ $image['image_file'] ? $image['image_file']->temporaryUrl() : '' }}" class="img-fluid">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                        @endforeach
                    @endif
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



