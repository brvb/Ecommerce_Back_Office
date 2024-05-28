<?php

namespace App\Livewire\Promotions;

use Livewire\Component;
use App\Models\promotions;

class PromotionsComponent extends Component
{
    public function render()
    {
        $promotions = promotions::all();
        return view('livewire.promotions.promotions-component', compact('promotions'));
    }
}
