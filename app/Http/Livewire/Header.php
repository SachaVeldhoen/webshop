<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Header extends Component
{
    protected $listeners = ['cart_updated' => 'render'];
    public function render()
    {

        $cart_count = Cart::count();
        $cart_price = Cart::total();

        return view('livewire.header', compact(array('cart_count', 'cart_price')));
    }
}
