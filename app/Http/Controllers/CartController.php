<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {

    }

    public function add($id){
        $product = Product::findOrFail($id);
        $cart = session()->get('cart');

        if(!$cart) {
            $cart = [
                $id => [
                    'name' => $product->productName,
                    'code' => $product->productCode,
                    'price' => $product->productPrice,
                    'quantity' => 1,
                    'image' => $product->productImage
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Item Added Successfully');
        }
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Quantity Updated');
        }
        $cart[$id] = [
            'name' => $product->productName,
            'code' => $product->productCode,
            'price' => $product->productPrice,
            'quantity' => 1,
            'image' => $product->productImage
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Item Added');

    }

    public function view(){
        //return session('cart');
       return view('cart.view');
    }

    public function empty(){
        session()->forget('cart');
        return redirect()->route('productHome');
    }
}
