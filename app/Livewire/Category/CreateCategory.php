<?php

namespace App\Livewire\Category;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Products;
use App\Models\Category;



class CreateCategory extends Component
{
    public function save()
    {
        dd("hello");
    }
    public function render()
    {
        //dd("teste");
        return view('livewire.category.create-category');
    }
}
