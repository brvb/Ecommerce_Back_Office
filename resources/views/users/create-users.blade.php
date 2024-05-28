@extends('main')
@section('body')
@livewireStyles
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Add Users</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-box"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('users') }}">User</a></li>
                    <li class="breadcrumb-item"><a href="#!">Add</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>

@livewire('users.create-users')

@livewireScripts
@endsection