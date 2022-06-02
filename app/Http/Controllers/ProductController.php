<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request){
        $product=new Product();
        $product->fname=$request->fname;
        $product->lname=$request->lname;
        $product->number=$request->number;
        $product->aadhar=$request->aadhar;
        $product->address=$request->address;
        $product->email=$request->email;
        $product->save();
    }

    public function index(){
        $product=Product::all();
        return view('table',compact('product'));
    }

    public function edit($id){
        $product=Product::find($id);
        return view('edit',compact('product'));
    }

    public function update(Request $request,$id){
        $product=Product::find($id);
        $product->fname=$request->fname;
        $product->lname=$request->lname;
        $product->number=$request->number;
        $product->aadhar=$request->aadhar;
        $product->address=$request->address;
        $product->email=$request->email;
        $product->save();

    }

    public function delete($id){
        $product=Product::find($id);
        $product->delete();
    }
}
