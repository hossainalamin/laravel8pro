<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createProduct(){
        return view('product');
    }
    public function productSubmit(Request $req){
        $product = new Product();
        $product->product_name = $req->name;
        $product->price = $req->price;
        $product->detail = $req->detail;
        $product->save();
        return back()->with('product-notification','Product added successfully');
    }
}
