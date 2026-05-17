<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        return redirect('Blog/blogtable');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $blog)
    {
    
        // dd($blog->BlogTitle);
        return view('admin.Product.show',compact('blog'));

    }

  
    public function edit(Product $blog)
    {
        
       return view('admin.Product.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $blog)
    {
      
         $blog->update($request->all());
         return redirect()->route('blogtable');
    }

   
    public function destroy(Product $blog)
    {
       
        $blog->delete();
        return redirect()->route('blogtable');
    }
}
