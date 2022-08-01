<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // home page

    public function index()
    {
        $cart_count = Cart::content()->count();
        $cart_price = Cart::total();

        return view('home', compact(array('cart_count', 'cart_price')));
    }

    public function account() {
        return view('account.dashboard');
    }
}
