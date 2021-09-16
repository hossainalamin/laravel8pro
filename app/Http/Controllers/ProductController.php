<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PDO;

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
    public function getAllProduct(){
        $product = Product::orderBy('id','DESC')->get();
        return view('getproduct',compact("product"));
    }
    public function getProductById($id){
        $prod_by_id = Product::where('id',$id)->first();
        return view('getproductbyid',compact('prod_by_id'));
    }
    public function deleteProduct($id){
        Product::where('id',$id)->delete();
        return back()->with('delete-msg','Delete product successfully');
    }
    public function updateProduct($id){
        $product_update = Product::find($id);
        return view('productupdate',compact('product_update'));
    }
    public function updateSubmit(Request $req){
        $product = Product::find($req->id);
        $product->product_name = $req->name;
        $product->price = $req->price;
        $product->detail = $req->detail;
        $product->save();
        return back()->with('update-msg',"Update successfull");
    }
}
