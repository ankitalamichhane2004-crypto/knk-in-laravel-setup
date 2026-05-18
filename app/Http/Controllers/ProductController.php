<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
         $datas = Product::get();
       return view('admin.Product.index',compact('datas'));
    }

   
    public function create()
    {
         return view('admin.Product.create');
    }

  
    public function store(Request $request)
    {
         Product::create($request->all());
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
    
        // dd($blog->BlogTitle);
        return view('admin.Product.show',compact('product'));

    }

  
    public function edit(Product $product)
    {
        
       return view('admin.Product.edit',compact('product'));
    }

    
    public function update(Request $request, Product $product)
    {
      
         $product->update($request->all());
         return redirect()->route('product.index');
    }

   
    public function destroy(Product $product)
    {
       
        $product->delete();
        return redirect()->route('product.index');
    }
}
