<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use http\Env\Request;
use Livewire\Component;

class Images extends Component
{
    public $product;
    public $images;
    public $quantity = [];

    public function render()
    {
        $cart = Cart::content();
        return view('livewire.images',
            compact('cart' ));
    }
    public function mount()
    {
        $this->products = Product::all();
        foreach ($this->products as $product) {
            $this->quantity[$product->id] = 1;
        }
    }

    public function addToCart($product_id)
    {
        $product = Product::findOrFail($product_id);


        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => $this->quantity[$product_id],
            'price' => $product->price / 100,
            'weight' => 2,
            'options' => ['thumbnail' => $product->thumbnail]
        ]);

        $this->emit('cart_updated');
    }
}
