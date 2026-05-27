<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class NewController extends Controller
{
 public function home(){
 return view('home');
 }
  public function Product(){
    $products = Product::get();
 return view('product',compact('products'));
 }

   public function aboutProduct(){
 return view('aboutproduct');
 }

   public function blog(){
 return view('blog');
 }

   public function contactus(){
 return view('contact-us');
 }
 
   public function gallery(){
 return view('gallery');
 }
 
   public function welcome(){
 return view('welcome');
 }

   public function whychooseus(){
 return view('whychooseus');
 }
 

   public function dashboard(){
 return view('admin.dashboard');
 }
}

