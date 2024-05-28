<div class="row">
    <div class="col-md-7">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Promotion information</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="Titulo">Título</label>
                                    <input type="text" class="form-control" id="Titulo"  value="" wire:model.defer='titulo'>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group text-left">
                                    <label for="status">Select Category Status</label>
                                    <select class="form-control" id="status" name="status" wire:model.defer='status'>
                                        <option value="ativo">Ativo</option>
                                        <option value="inativo">Inativo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="Paragrafo">Description</label>
                                    <textarea class="form-control" id="Paragrafo" style="min-height: 140px;" wire:model.defer='description'></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Related Product</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <label for="status">Select Product</label>
                                    <select class="form-control" id="status" name="status" wire:change='selectProdPromotion($event.target.value)' wire:model.defer='selectedProduct'>
                                        <option value="">Select Product</option>
                                        @foreach ($products as $product)
                                            <option value="{{$product->reference}}">{{$product->reference}} | {{$product->product_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @if ($hasSelectProduct)
                                @foreach ($hasSelectProduct as $index => $product)
                                    <div class="col-12">
                                        <hr>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group text-left">
                                            <label class="floating-label" for="Reference">Reference</label>
                                            <input type="text" class="form-control" id="Reference" value="{{ $product['reference'] }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group text-left">
                                            <label class="floating-label" for="Titulo">Título</label>
                                            <input type="text" class="form-control" id="Titulo" value="{{ $product['product_name'] }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-2" style="display: flex;align-items: flex-end;justify-content: flex-end;">
                                        <div class="form-group text-left">
                                            <br>
                                            <button class="btn btn-primary" wire:click="removeProduct({{ $index }})">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            @endif



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
                        <h5>Pricing</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="Price">Percentage</label>
                                    <input type="text" class="form-control" id="Price" value=""  wire:model.defer='percentage'>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="StartDate">Start Date</label>
                                    <input type="date" class="form-control" id="StartDate"  value="" wire:model.defer='start_date'>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="EndDate">End Date</label>
                                    <input type="date" class="form-control" id="EndDate"  value="" wire:model.defer='end_date'>
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
                        <button type="button" class="btn  btn-primary" wire:click='save()'>Save Promotion</button>
                        <button type="button" class="btn  btn-outline-secondary">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>