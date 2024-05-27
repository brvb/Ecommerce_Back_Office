<?php

namespace App\Livewire\Products;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Products;
use App\Models\Category;



class CreateProduct extends Component
{
    public function save()
    {
        dd("hello");
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.products.create-product', compact('categories'));
    }
}
