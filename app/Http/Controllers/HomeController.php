<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

//    public function store(Request $request)
//    {
//        $request->validate([
//            'name' => 'required',
//            'email' => 'required|email',
//            'phone' => 'required|digits:10|numeric',
//            'subject' => 'required',
//            'message' => 'required'
//        ]);
//
//        Contact::create($request->all());
//
//        return redirect()->back()
//            ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
//    }
}
