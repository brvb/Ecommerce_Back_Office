<?php

namespace App\Livewire\Users;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Products;
use App\Models\Category;
use App\Models\Users;



class CreateUsers extends Component
{
    public function save()
    {
        dd("hello");
    }
    public function render()
    {
        //dd("LIVEWIRE RENDER");
        return view('livewire.users.create-users');
    }
}
