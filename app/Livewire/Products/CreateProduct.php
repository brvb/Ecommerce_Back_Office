<?php

namespace App\Livewire\Products;

use App\Models\Category;
use App\Models\Products;
use App\Models\VariantsProducts;
use App\Models\Imagens;


use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProduct extends Component
{
    use WithFileUploads;

    public $reference;
    public $productname;
    public $location;
   
    public $descricao;
    public $category;
    public $status;
    public $showSuccessMessage = false;
        
    // Variantes
    public array $hasVariantsProduct = [];
    public $VariantsColor = "";
    public $VariantsSize = "";
    public $VariantsWeight = "";
    public $VariantsStock = "";
    public $VariantsPrice= "";
    public $VariantsSale= "";
    public array $hasImageProduct = [];
    public $image;

    public function updatedImage()
    {
        if ($this->image) {
            $this->hasImageProduct[] = [
                'image_file' => $this->image,
            ];

            $this->image = null;
        }
    }
    public function addVariants()
    {
        if ($this->VariantsColor && $this->VariantsSize && $this->VariantsWeight) {
            $this->hasVariantsProduct[] = [
                'color' => $this->VariantsColor,
                'size' => $this->VariantsSize,
                'weight' => $this->VariantsWeight,
                'stock' => $this->VariantsStock,
                'price' => $this->VariantsPrice,
                'sale' => $this->VariantsSale,
                'imageArry'=> $this->hasImageProduct

            ];
            $this->VariantsColor = "";
            $this->VariantsSize = "";
            $this->VariantsWeight = "";
            $this->VariantsStock = "";
            $this->VariantsPrice = "";
            $this->VariantsSale = "";
        }
    }
    public function removeVariants($index)
    {
        unset($this->hasVariantsProduct[$index]);
    }

    public function save()
    {
        $this->validate([
            'reference' => 'required',
            'productname' => 'required',
            'location' => 'required',
            'descricao' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);


        $somaStockTotal = 0;
        foreach ($this->hasVariantsProduct as $Variant) {
            $somaStockTotal += $Variant["stock"];
        }
        Products::create([
            'reference' => $this->reference,
            'product_name' => $this->productname,
            'location' => $this->location,
            'Description' => $this->descricao,
            'stock' => $somaStockTotal,
            'idcategory' => $this->category,
            'status' => $this->status,
        ]);

        $cout = 0;
        foreach ($this->hasVariantsProduct as $Variant) {
            $cout += 1;

            $currentDateTime = new \DateTime();
            $barcode = $currentDateTime->format('YmdHis');
            $calculoBarcode = $barcode + $cout;

            VariantsProducts::create([
                'reference' => $this->reference,
                'barcode' => $calculoBarcode,
                'color' => $Variant["color"],
                'size' => $Variant["size"],
                'stock' => $Variant["stock"],
                'price' => $Variant["price"],
                'weight' => $Variant["weight"],
                'sale' => $Variant["sale"],
            ]);
            foreach ($this->hasImageProduct as $imageData) {
                $image = $imageData['image_file'];
                if ($image && $image->isValid()) {
                    $imageContent = file_get_contents($image->getRealPath());
                    $imageBase64 = base64_encode($imageContent);
    
                    Imagens::create([
                        'reference_product' => $this->reference,
                        'barcode_variants' => $calculoBarcode,
                        'imagem_file' => $imageBase64,
                    ]);
                }
            }
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
