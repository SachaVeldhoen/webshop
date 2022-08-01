<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
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
    public function index(){
        $products = Product::all();
        return view('products.index',compact('products'));
    }
    public function allProducts(){
        $products = Product::all();
        return view('products.all',compact('products'));
    }

    // admin only function
    public function uploadProduct() {
        $user = Auth::user();
        if ($user) {
            if ($user->isAdmin == 1) {
                return view('admin.create');
            } else {
                return view('no-acces');
            }
        } else {
            return view('no-acces');
        }
    }
    public function store(Request $req){
        $file = $req->file('thumbnail');
        $filename = $file->getClientOriginalName(); // getting image extension
        $path = public_path('/uploads/');


        if (!file_exists($path . '' . $filename)) {
            $file->move($path, $filename);
        }

        $data = $req->validate([
            'name'=>'required',
            'price'=>'required',
        ]);


        $thumbName = $data['name'].'-image-'.time().rand(1,1000).'.'.$file->extension();
        $file->move(public_path('product_images'),$thumbName);

        $new_product = Product::create([
            "name" => $req->name,
            "price" => $req->price,
            "thumbnail" => $thumbName,
            "tag_id" => $req->tag_id,
        ]);
//        $new_product->thumbnail = $imageName;


        if($req->has('images')){
            foreach($req->file('images')as $image){
                $imageName = $data['name'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('product_images'),$imageName);

                Image::create([
                    'product_id'=>$new_product->id,
                    'image'=>$imageName
                ]);
            }
        }
        return back()->with('success','Added');
    }

    public function images($id){
        $product = Product::find($id);
        if(!$product) abort(404);
        $images = $product->images;
        return view('products.index',compact('product','images'));
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
