<?php

namespace App\Livewire\Promotions;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Products;
use App\Models\Promotions;

class CreatePromotion extends Component
{
    use WithFileUploads;

    public array $hasSelectProduct = [];
    public $titulo = "";
    public $status = "";
    public $description = "";
    public $percentage = "";
    public $start_date = "";
    public $end_date = "";
    public $image = "";
    public $showSuccessMessage = false;

    public function selectProdPromotion($productReference)
    {
        foreach ($this->hasSelectProduct as $product) {
            if ($product['reference'] === $productReference) {
                // Produto já está na lista, então retorna sem adicionar
                return;
            }
        }

        // Se o produto não estiver na lista, adiciona-o
        $selectedProduct = Products::where("reference", $productReference)->first();
        if ($selectedProduct) {
            $this->hasSelectProduct[] = $selectedProduct->toArray();
        }
        return;
    }

    public function removeProduct($index)
    {
        unset($this->hasSelectProduct[$index]);
        $this->hasSelectProduct = array_values($this->hasSelectProduct); // Reindexa o array
    }

    public function save()
    {
        $this->validate([
            'titulo' => 'required|string|max:255',
            'status' => 'required|string|max:50',
            'description' => 'required|string|max:1000',
            'percentage' => 'required|numeric|min:0|max:100',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'hasSelectProduct' => 'required|array|min:1',
            'image' => 'required',
        ]);
        $relatedProducts = [];
        foreach ($this->hasSelectProduct as $product) {
            Products::where('id', $product['id'])
                ->update([
                    'group_promotion' => 'True',
                    'sale' => $this->percentage,
                ]);
            $relatedProducts[] = [
                'id' => $product['id'],
                'reference' => $product['reference']
            ];
        }

        $imageContent = file_get_contents($this->image->getRealPath());
        $imageBase64 = base64_encode($imageContent);

        Promotions::create([
            'title' => $this->titulo,
            'status' => $this->status,
            'description' => $this->description,
            'sale' => $this->percentage,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'related_products' => json_encode($relatedProducts),
            'image_card' => $imageBase64,
        ]);

        $this->showSuccessMessage = true;
        return redirect()->route('create-promotion')->with('message', 'Produto criado com sucesso!')->with('status', 'success');
    }

    public function render()
    {
        $products = Products::all();

        return view('livewire.promotions.create-promotion', compact('products'));
    }
}
