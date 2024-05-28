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

            {{-- <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Inventory</h5>
                    </div>
                    <div class="card-body">
                    <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <li><a class="nav-link text-left active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="feather icon-box"></i> Restock</a></li>
                                    <li><a class="nav-link text-left" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-car"></i> Shipping</a></li>
                                    <li><a class="nav-link text-left" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-globe"></i> Global Delivery</a></li>
                                    <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-sliders-h"></i> Attributes</a></li>
                                </ul>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <h5 >Options</h5>
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="form-group text-left">
                                                    <label class="floating-label" for="AddToStock">ADD TO STOCK</label>
                                                    <input type="number" class="form-control" id="AddToStock" value="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group text-left" style="display: flex;flex-direction: column;">
                                                    <label class="floating-label">Product in stock now: <span class="text-muted">54</span></label>
                                                    <label class="floating-label">Product in transit: <span class="text-muted">390</span></label>
                                                    <label class="floating-label">Last time restocked: <span class="text-muted">24th June, 2023</span></label>
                                                    <label class="floating-label">Total stock over lifetime: <span class="text-muted">2430</span></label>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <h5>Shipping Type</h5>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" >
                                                    <p class="mb-0" for="gridRadios1">Fulfilled by Seller</p>
                                                    <p class="text-muted mb-0">You'll be responsible for product delivery.</p>
                                                    <p class="text-muted mb-0">Any damage or delay during shipping may cost you a Damage fee.</p>
                                                </div>
                                                <br>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" checked>
                                                    <p class="mb-0" for="gridRadios2">Fulfilled by Company name <button class="btn btn-sm btn-warning disabled "><p class="mb-0">RECOMMENDED</p></button></p>
                                                    <p class="text-muted mb-0">You'll be responsible for product delivery.</p>
                                                    <p class="text-muted mb-0">Any damage or delay during shipping may cost you a Damage fee.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                        <h5>Global Delivery</h5>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" >
                                                    <p class="mb-0" for="gridRadios1">Worldwide deliveryr</p>
                                                    <p class="text-muted mb-0">Only available with Shipping method: <span class="text-primary">Fulfilled by Company name</span></p>
                                                </div>
                                                <br>
                                                <div class="form-check">
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" checked>
                                                            <p class="mb-0" for="gridRadios2">Selected Countries</p>
                                                            <input type="text" class="form-control" id="SelectedCountries" placeholder="Type Country name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                                                    <p class="mb-0" for="gridRadios3">Local delivery</p>
                                                    <p class="text-muted mb-0">Deliver to your country of residence: <span class="text-primary">Change profile address</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                        <h5>Attributes</h5>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" >
                                                    <p class="mb-0" for="gridRadios1">Fragile Product</p>
                                                </div>
                                                <br>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" >
                                                    <p class="mb-0" for="gridRadios2">Biodegradable</p>
                                                </div>
                                                <br>
                                                <div class="form-check">
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" checked>
                                                            <p class="mb-0" for="gridRadios3">Selected Countries</p>
                                                            <input type="text" class="form-control" id="SelectedCountries" placeholder="Max. allowed Temper">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-check">
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option4">
                                                            <p class="mb-0" for="gridRadios4">Selected Countries</p>
                                                            <input type="date" class="form-control" id="SelectedCountries">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
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
                        <button type="button" class="btn  btn-primary" wire:click="save()">Save Product</button>
                        <button type="button" class="btn btn-outline-secondary"
                            wire:click="refresh()">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="z-index: 999; color:white; position:fixed;">
        @if ($showSuccessMessage)
            <div class="alert alert-success" role="alert" id="successMessage">
                Produto adicionado com sucesso!
            </div>
        @endif
    </div>
</div>


