<div>
    <div class="card">
        <div class="card-header">
            <i class="fas fa-filter"></i>
            <h5>Filtros</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Title">Title</label>
                            <input type="text" class="form-control" id="Title" aria-describedby="emailHelp" placeholder="Title">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Category">Category</label>
                            <input type="text" class="form-control" id="Category" placeholder="Category">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Price">Price</label>
                            <input type="text" class="form-control" id="Price" placeholder="Price">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>    
    <div class="card table-card">
        <div class="card-header">
            <div style="display: flex;justify-content: space-between;">
                <h5><i class="feather icon-box"></i> Products</h5>
                <a href="{{ route("create-product") }}">
                    <button type="button" class="btn btn-primary mx-sm-5">Create Products</button>
                </a>
                
            </div>
            <div class="card-header-right">
                <div class="btn-group card-option">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="feather icon-more-horizontal"></i>
                    </button>
                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>
                                <div class="chk-option">
                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                All
                            </th>
                            <th></th>
                            <th>STOCK</th>
                            <th>PRICE</th>
                            <th class="text-center">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    <div class="chk-option">
                                        <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label"></span>
                                        </label>
                                    </div>
                                    <div class="d-inline-block align-middle">
                                        <div class="d-flex">
                                            <img src="assets/images/user/avatar-4.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                            <div class="d-inline-block">
                                                <h6>{{ $product->product_name}}</h6>
                                                <p class="text-muted m-b-0">{{ $product->idcategory}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td></td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->price }}</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg{{ $product->id}}"><i class="fas fa-pen"></i></button>
                                    <button type="button" class="btn btn-sm btn-outline-primary"><i class="fas fa-ellipsis-h"></i></button>
                                    <button type="button" class="btn btn-sm btn-outline-primary">+</button>

                                    <div class="modal fade bd-example-modal-lg{{ $product->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h4" id="myLargeModalLabel">EDIT PRODUCTS</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body" id="{{ $product->id}}">
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <div class="form-group text-left">
                                                                <label class="floating-label" for="Titulo">Título</label>
                                                                <input type="text" class="form-control" id="Titulo"  value="{{ $product->product_name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-group text-left">
                                                                <label class="floating-label" for="Titulo">Stock</label>
                                                                <input type="text" class="form-control" id="Titulo" value="{{ $product->stock}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group text-left">
                                                                <label class="floating-label" for="Paragrafo">Parágrafo</label>
                                                                <textarea class="form-control" id="Paragrafo">{{ $product->Description}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-group text-left">
                                                                <label class="floating-label" for="old_price">Old Price</label>
                                                                <input type="text" class="form-control" id="old_price"  value="{{ $product->old_price}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-group text-left">
                                                                <label class="floating-label" for="Price">Price</label>
                                                                <input type="text" class="form-control" id="Price"  value="{{ $product->price}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-group text-left">
                                                                <label class="floating-label" for="Weight">Weight</label>
                                                                <input type="text" class="form-control" id="Weight"  value="{{ $product->weight}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-group text-left">
                                                                <label class="floating-label" for="Sale">Sale</label>
                                                                <input type="text" class="form-control" id="Sale"  value="{{ $product->sale}}">
                                                            </div>
                                                        </div>
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
                                                <hr>
                                                <div class="modal-body text-right">
                                                    <button type="button" class="btn  btn-secondary" data-dismiss="modal" aria-label="Close">Go back</button>
                                                    <button type="button" class="btn  btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
