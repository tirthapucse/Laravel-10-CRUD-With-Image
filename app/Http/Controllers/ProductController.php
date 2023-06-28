<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        
        // shortcut Coding
        return view('products.index',['products'=>Product::get()]);

        /* Full Form Coding - Facthing products Code
         $products = Product::get(); 
        return view('products.index',['products'=>$products]); */
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        
        
        // validiation for required things in form
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
        ]);

        // image store codes here. 
        // I've facing two problems there these are 
        // 1. call back error 
        // 2.$product->description = $request->description; -> not destination!



        $imageName = time().'.'.request()->file('image')->extension();
        request()->image->move(public_path('images'), $imageName);

        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
        return back()->withSuccess('Product Successfully Created!!!!'); 

    }

    public function edit($id){
        
        $product = Product::where('id',$id)->first();
        return view('products.edit',['product' => $product]);
    }

    public function update(Request $request, $id){
         
        // same from store function
         $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000'
        ]);

        $product = Product::where('id',$id)->first();

        // same from store function
        if(isset($request->image)){
            $imageName = time().'.'.request()->file('image')->extension();
            request()->image->move(public_path('images'), $imageName);
            $product->image = $imageName;
        }

        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
        return back()->withSuccess('Product Successfully Updated!!!!'); 
        
    }

    public function destroy($id){
        $product = Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Product Successfully Deleted!!!!'); 
    }

    public function show($id){
        $product = Product::where('id',$id)->first();
        return view('products.show',['product'=>$product]);
    }

}


// to check the codes goes well or not: dd($request->all());
