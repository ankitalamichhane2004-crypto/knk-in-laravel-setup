<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
 public function home(){
 return view('home');
 }
  public function Product(){
 return view('product');
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

