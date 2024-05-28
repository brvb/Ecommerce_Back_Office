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
                                        <a href="#" class="text-primary mb-1">ADD NEW PARENT CATEGORY</a> 
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