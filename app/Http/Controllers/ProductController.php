<?php

namespace App\Http\Controllers;

use App\Product;
use Faker\Provider\Company;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->get();
        return view('product.index', compact('products'));
    }

    public function show(Product $product){
        return view('product.view', compact('product'));
    }

    public function add() {
        return view('product.add');
    }

    public function store(){
        request()->validate([
            'productCode' => 'required',
            'productName' => 'required',
            'productDescription' => 'required',
            'productPrice' => 'required|numeric|min:1|not_in:0',
        ]);
        $product = new Product;
        $product->productCode = request('productCode');
        $product->productName = request('productName');
        $product->productDescription = request('productDescription');
        $product->productPrice = request('productPrice');
        if(request()->hasFile('productImage')){
            $file = request()->file('productImage');
            $extension = $file->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;
            $file->move('uploads/products/',$imageName);
            $product->productImage = $imageName;
        } else {
            $product->productImage = null;
        }
        $product->save();

        return redirect('/products');
    }

    public function edit(Product $product){
        return view('product.edit', compact('product'));
    }

    public function update(Product $product){
        request()->validate([
            'productCode' => 'required',
            'productName' => 'required',
            'productDescription' => 'required',
            'productPrice' => 'required|numeric|min:1|not_in:0',
        ]);
        $product->productCode = request('productCode');
        $product->productName = request('productName');
        $product->productDescription = request('productDescription');
        $product->productPrice = request('productPrice');
        if(request()->hasFile('productImage')){
            $file = request()->file('productImage');
            $extension = $file->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;
            $file->move('uploads/products/',$imageName);
            $product->productImage = $imageName;
        } else {
            $product->productImage = null;
        }
        $product->update();
        return redirect('/products');
    }

    public function destroy($product){

    }
}
