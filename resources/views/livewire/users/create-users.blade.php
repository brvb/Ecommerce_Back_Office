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
                                    <label class="floating-label" for="Titulo">Name:</label>
                                    <input type="text" class="form-control" id="Titulo"  value="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="Titulo">E-Mail</label>
                                    <input type="text" class="form-control" id="Titulo"  value="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <label class="floating-label" for="Paragrafo">Password</label>
                                    <input type="password" class="form-control" id="Titulo"  value="">
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
                        <button type="button" class="btn  btn-primary" wire:click="save()">Save User</button>
                        <button type="button" class="btn  btn-outline-secondary">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>