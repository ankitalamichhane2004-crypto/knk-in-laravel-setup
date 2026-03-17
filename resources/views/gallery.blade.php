@extends('layouts.frontend.master')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
    <a href="./card1.hen.jpg" data-fancybox="gallery" data-caption="Hen">
      <img src="{{ asset('./images/card1.hen.jpg') }}"  class="galleryimg"/></a>
</div>

<div class="col-lg-4 col-md-6 col-sm-12">
    <a href="./card2.goat.jpg" data-fancybox="gallery" data-caption="Goat">
      <img src="{{ asset('./images/card2.goat.jpg') }}"  class="galleryimg"/></a>
</div>

<div class="col-lg-4 col-md-6 col-sm-12">
    <a href="./nutrition - Copy.jpg" data-fancybox="gallery" data-caption="nutrition">
      <img src="{{ asset('./images/nutrition.jpg') }}"  class="galleryimg"/></a>
</div>
</div>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
    <a href="./card3.fish.jpg" data-fancybox="gallery" data-caption="fish">
      <img src="{{ asset('./images/card3.fish.jpg') }}"  class="galleryimg"/></a>
</div>

<div class="col-lg-4 col-md-6 col-sm-12">
    <a href="./card4.cow.jpeg" data-fancybox="gallery" data-caption="cow">
      <img src="{{ asset('./images/card4.cow.jpeg') }}"  class="galleryimg"/></a>
</div>

<div class="col-lg-4 col-md-6 col-sm-12">
    <a href="./pesticide.jpg" data-fancybox="gallery" data-caption="pesticide">
      <img src="{{ asset('./images/pesticide.jpg') }}"  class="galleryimg"/></a>
</div>
</div>
</div>



<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
    <a href="./seeds.jpg" data-fancybox="gallery" data-caption="seed">
      <img src="{{ asset('./images/seeds.jpg') }}"  class="galleryimg"/></a>
</div>

<div class="col-lg-4 col-md-6 col-sm-12">
    <a href="./plant image.jpg" data-fancybox="gallery" data-caption="plant">
      <img src="{{ asset('./images/plant image.jpg') }}"  class="galleryimg"/></a>
</div>

<div class="col-lg-4 col-md-6 col-sm-12">
    <a href="./tomato.jpeg" data-fancybox="gallery" data-caption="tomato">
      <img src="{{ asset('./images/tomato.jpeg') }}"  class="galleryimg"/></a>
</div>
</div>
</div>




<div class="whatapp">
  <img src="{{ asset('./images/whatsapp.png') }}" alt="">
</div>




 @endsection