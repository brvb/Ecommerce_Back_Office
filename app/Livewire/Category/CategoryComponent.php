<?php

namespace App\Livewire\Category;
use App\Models\Category;


use Livewire\Component;

class CategoryComponent extends Component
{
    public function render()
    {
        $categories = Category::all();

        return view('livewire.category.category-component', compact('categories'));
    }
}
