<?php

namespace App\Livewire\Products;

use App\Models\Category;
use App\Models\Products;
use Livewire\Component;
use Livewire\WithFileUploads;


class CreateProduct extends Component
{
    use WithFileUploads;

    public $reference;
    public $productname;
    public $location;
    public $barcode;
    public $descricao;
    public $price;
    public $sale;
    public $stock;
    public $category;
    public $status;
    public $showSuccessMessage = false;

    public function save()
    {

        // Adiciona regras de validação
        $this->validate([
            'reference' => 'required',
            'productname' => 'required',
            'location' => 'required',
            'barcode' => 'required',
            'descricao' => 'required',
            'price' => 'required',
            'sale' => 'required',
            'stock' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);

        Products::create([
            'reference' => $this->reference,
            'product_name' => $this->productname,
            'location' => $this->location,
            'barcode' => $this->barcode,
            'Description' => $this->descricao,
            'price' => $this->price,
            'sale' => $this->sale,
            'stock' => $this->stock,
            'idcategory' => $this->category,
            'status' => $this->status,
        ]);

        $this->showSuccessMessage = true;
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.products.create-product', compact('categories'));
    }
}
