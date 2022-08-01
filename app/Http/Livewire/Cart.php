<?php

namespace App\Http\Livewire;


use App\Models\Product;
use Livewire\Component;

class Cart extends Component
{
    protected $listeners = ['cart_updated' => 'render'];

    public function render()
    {

        $cart_count = \Gloudemans\Shoppingcart\Facades\Cart::count();
        $cart_price = \Gloudemans\Shoppingcart\Facades\Cart::subtotal();
        $cartProducts = \Gloudemans\Shoppingcart\Facades\Cart::content();

        return view('livewire.cart', compact(array('cart_count', 'cart_price', 'cartProducts')));
    }
    public function doRemove($rowId)
    {
        \Gloudemans\Shoppingcart\Facades\Cart::remove($rowId);
        return redirect('/cart');
    }
    public function increaseQuantity($rowId)
    {
        $product =  \Gloudemans\Shoppingcart\Facades\Cart::get($rowId);
        $qty = $product->qty + 1;
        \Gloudemans\Shoppingcart\Facades\Cart::update($rowId, $qty);
        return redirect('/cart');
    }
    public function decreaseQuantity($rowId)
    {
        $product =  \Gloudemans\Shoppingcart\Facades\Cart::get($rowId);
        $qty = $product->qty - 1;
        \Gloudemans\Shoppingcart\Facades\Cart::update($rowId, $qty);
        return redirect('/cart');
    }
}
