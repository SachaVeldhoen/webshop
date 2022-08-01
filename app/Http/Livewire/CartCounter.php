<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class CartCounter extends Component
{
    protected $listeners = ['cart_updated' => 'render'];

    public function render()
    {
//        $cart_count = Cart::count();
//        $cart_price = Cart::total();

//        return view('livewire.cart-counter', compact(array('cart_count', 'cart_price')));
    }
}
