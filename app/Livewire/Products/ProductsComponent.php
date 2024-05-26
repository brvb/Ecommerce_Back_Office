<?php

namespace App\Livewire\Products;
use App\Models\Products;


use Livewire\Component;

class ProductsComponent extends Component
{
    public function render()
    {
        $products = Products::all();

        return view('livewire.products.products-component', compact('products'));
    }
}
