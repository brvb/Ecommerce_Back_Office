<?php

namespace App\Livewire\Promotions;

use Livewire\Component;
use App\Models\products;
use App\Models\promotions;


class CreatePromotion extends Component
{
    public array $hasSelectProduct = [];
    public $titulo = "";
    public $status = "";
    public $description = "";
    public $percentage = "";
    public $start_date = "";
    public $end_date = "";

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
        // dd($this->description,$this->status,$this->titulo,$this->percentage,$this->start_date,$this->end_date);
        $promotions = promotions::create([
            'title' => $this->titulo,
            'status' => $this->status,
            'description' => $this->description,
            'sale' => $this->percentage,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);
        
        $this->reset(['titulo', 'status', 'description', 'percentage', 'start_date', 'end_date', 'hasSelectProduct']);
    }

    public function render()
    {
        $products = Products::all();

        return view('livewire.promotions.create-promotion', compact('products'));
    }
}
