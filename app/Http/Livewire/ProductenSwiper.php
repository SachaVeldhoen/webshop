<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductenSwiper extends Component
{
    public $products;
    public array $quantity = [];

    public function mount()
    {
        $this->products = Product::all();
        foreach ($this->products as $product) {
            $this->quantity[$product->id] = 1;
        }
    }

    public function render()
    {
        return view('livewire.producten-swiper');
    }
}
