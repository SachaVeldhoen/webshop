<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Producten extends Component
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
        $cart = Cart::content();

        return view('livewire.producten',
            compact('cart'));
    }

    public function addToCart($product_id)
    {
        $product = Product::findOrFail($product_id);
        Cart::add(
            $product->id,
            $product->name,
            $this->quantity[$product_id],
            $product->price / 100,
               $product->thumbnail,
        );

        $this->emit('cart_updated');
    }
}
