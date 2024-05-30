<?php

namespace App\Livewire\Products;

use App\Models\Category;
use App\Models\Products;
use App\Models\VariantsProducts;

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
    public $image = "";
    public $showSuccessMessage = false;
        
    // Variantes
    public array $hasVariantsProduct = [];
    public $VariantsColor = "";
    public $VariantsSize = "";
    public $VariantsWeight = "";
    public $VariantsAmount = "";
    
    public function addVariants()
    {
        if ($this->VariantsColor && $this->VariantsSize && $this->VariantsWeight) {
            $this->hasVariantsProduct[] = [
                'color' => $this->VariantsColor,
                'size' => $this->VariantsSize,
                'weight' => $this->VariantsWeight,
                'amount' => $this->VariantsAmount,
            ];
            $this->VariantsColor = "";
            $this->VariantsSize = "";
            $this->VariantsWeight = "";
            $this->VariantsAmount = "";
        }
    }
    public function removeVariants($index)
    {
        unset($this->hasVariantsProduct[$index]);
    }

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
            'image' => 'required',
        ]);

        $imageContent = file_get_contents($this->image->getRealPath());
        $imageBase64 = base64_encode($imageContent);

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
            'image_file' => $imageBase64,
        ]);
        foreach ($this->hasVariantsProduct as $Variant) {
            VariantsProducts::create([
                'reference' => $this->barcode,
                'color' => $Variant["color"],
                'size' => $Variant["size"],
                'weight' => $Variant["weight"],
                'amount' => $Variant["amount"],
            ]);
        }


        $this->showSuccessMessage = true;

        return redirect()->route('create-product')->with('message', 'Produto criado com sucesso!')->with('status', 'success');
    }

    public function render()
    {
        $categories = Category::all();

        return view('livewire.products.create-product', compact('categories'));
    }
}
