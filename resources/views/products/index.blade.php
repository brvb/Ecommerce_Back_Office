@extends('main')
@section('body')
@livewireStyles
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Products Analytics</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products') }}">Products</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@livewire('products.products-component')

@livewireScripts
@endsection