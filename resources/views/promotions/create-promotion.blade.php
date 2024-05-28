@extends('main')
@section('body')
@livewireStyles
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Create Promotion</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-box"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('promotions') }}">Promotion</a></li>
                    <li class="breadcrumb-item"><a href="#!">Create</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@livewire('promotions.create-promotion')

@livewireScripts
@endsection