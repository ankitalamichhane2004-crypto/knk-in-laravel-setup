<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
         $datas = gallery::get();
       return view('admin.gallery.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.gallery.create');
          return redirect()->route('gallery.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $validate = $request->all();
        $path1 = $request->file('image1')->store('images','public');
        $path2 = $request->file('image2')->store('images','public');
        $validate['image1'] = $path1;
        $validate['image2'] = $path2;
        gallery::create($validate);
       return redirect()->route('gallery.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        return view('admin.gallery.show',compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
         return view('admin.gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $data=$request->all();

        if ($request->hasFile('image1')){
            if ($gallery->image1){
                Storage::disk('public')->delete($gallery->image1);
            }
            $path = $request->file('image1')->store('images','public');
            $data['image1'] = $path;
        }
        $gallery->update($data);

        
        if ($request->hasFile('image2')){
            if ($gallery->image2){
                Storage::disk('public')->delete($gallery->image2);
            }
            $path = $request->file('image2')->store('images','public');
            $data['image2'] = $path;
        }
        $gallery->update($data);



         return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
         if ($gallery->image1){
                Storage::disk('public')->delete($gallery->image1);
            }
        
             if ($gallery->image2){
                Storage::disk('public')->delete($gallery->image2);
            }
    $gallery->delete();
         
        return redirect()->route('gallery.index');
    }
}
