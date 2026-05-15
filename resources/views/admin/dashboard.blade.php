@extends('layouts.admin.master')
@section('content')
<!-- HOME -->
<div id="home" class="page active">
  <div class="box">
    <h2>Welcome 🚀</h2>
    <p>Dashboard Ready</p>
  </div>
</div>

<!-- PRODUCTS -->
<div id="products" class="page">
  <h2>Products</h2>

  <div class="box">
    <input id="pname" placeholder="Product Name">
    <input id="pprice" placeholder="Price">
    <button onclick="addProduct()">Add</button>
  </div>

  <table id="productTable"></table>
</div>

<!-- ABOUT -->
<div id="about" class="page">
  <h2>About</h2>
  <div class="box">
    <textarea id="aboutText"></textarea>
    <button onclick="saveAbout()">Save</button>
  </div>
  <div class="box" id="aboutDisplay"></div>
</div>

<!-- MISSION -->
<div id="mission" class="page">
  <h2>Mission</h2>
  <div class="box">
    <textarea id="missionText"></textarea>
    <button onclick="saveMission()">Save</button>
  </div>
  <div class="box" id="missionDisplay"></div>
</div>

<!-- BLOG -->
<div id="blog" class="page">
  <h2>Blog</h2>
  <div class="box">
    <input id="blogTitle" placeholder="Title">
    <textarea id="blogContent"></textarea>
    <button onclick="addBlog()">Add</button>
  </div>
  <div id="blogList"></div>
</div>

<!-- GALLERY -->
<div id="gallery" class="page">
  <h2>Gallery</h2>
  <div class="box">
    <input type="file" id="imgInput">
    <button onclick="addImage()">Upload</button>
  </div>
  <div id="galleryList"></div>
</div>

<!-- CONTACT -->
<div id="contact" class="page">
  <h2>Contact</h2>
  <div class="box">
    <input id="cname" placeholder="Name">
    <input id="cmsg" placeholder="Message">
    <button onclick="addMsg()">Save</button>
  </div>
  <div id="contactList"></div>
</div>

</div>
</div>

@endsection