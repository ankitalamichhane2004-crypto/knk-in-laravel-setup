<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css"
    rel="stylesheet"
/>

<style>
    img{
        height: 20px;
        width: 20px;
    }
    .email{
        color: rgb(14, 134, 14);
    }
    .fontcenter{
        display: flex;
    }
 
    .fontend{
        display: flex;
    }
    .header{
        background-color: rgb(2, 93, 158);
        color: white;
        padding: 5px;
    }
    .mainheader{
        background-color:rgb(2, 93, 158); ;
    }

   .logo{
    height: 30px;
    width: 50px;
    
   }
   .nav-item{
    padding-left: 100px !important;
}

.navheader{
  position: sticky !important;
  display: flex;
   position: sticky;
   top: 0px;
  z-index: 1000;
  background-color:#F8F9FA ;
 
}
.nav-link{
    font-size: 16px !important;
    font-weight: 400;
    color: black !important;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

.nav-item.dropdown:hover .dropdown-menu{
    display: block !important;
}

.nav-link:hover{
  background-color: rgb(55, 55, 159);
 color: white !important;
}
 
.video-container{
    position: relative;
    width: 100%;
    height: 75vh;
    overflow: hidden;
}

.video{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.overlayer{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    z-index: 1;
}

.video-text{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    z-index: 2;
    text-align: center;
    font-size: 2rem;
}

@media (max-width: 768px){
    .video-text{
        font-size: 1.2rem;
        padding: 0 10px;
    }
}


.productimg{
  height: 200px;
  width: 200px;
  object-fit: cover;
}

a {
  text-decoration: none;
}




.footerphone1{
    background-color:rgb(93, 162, 115) ;
    border-radius: 50%;
    color: white;
    padding: 5px;
    
   }

   .footerbox{
    display: flex;
    margin: 20px;
    gap: 10px;
    padding-top: 30px;
    
   }


.footer{
    margin: 10px;
    background-color: #036AAA;
    color: white;
    border-radius: 20px;
    
}

.innerfooter1{
    height: 300px;
    width: 400px;
   padding: 10px;
}
.innerfooter2{
    height: 300px;
    width: 400px;
    padding: 10px;
    padding-left: 100px;

}
.innerfooter3{
    height: 300px;
    width: 400px;
   
    padding: 10px;
}
.footernum{
   background-color: rgb(97, 146, 113) ;
  
}
.wholefooter{
  background-color: #036AAA;
}

   
.whatapp img{
  height: 50px;
  width: 50px;
  position: fixed;
  top: 500px;
  left: 0;
  z-index: 100;
}


</style>


<body>
     <div class="mainheader">
    <div class="container">
        <div class="header">
        <div class="row">
               <div class="col-lg-4 col-md-6">
                <div class="fontstart">
                <img src="./facebook.png" alt="">
                <img src="./viber.png" alt="">
                <img src="./whatsapp.png" alt="">
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="fontcenter">
              <i class="ri-mail-line email"></i>
                <p>knkagrovet4646@gmail.com</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="fontend">
            <i class="ri-phone-line phone"></i>
                <p>9865509590,9845343497</p>
                </div>
            </div>
         </div>
        </div>
        </div>
        </div>
    





        <div class="navheader">
          <div class="container">
        <div class="header2 bg-light">
       
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="./logo.png" alt="" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./home.html">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./product.html">Product</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           About
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./about-product.html">About Product</a></li>
            <li><a class="dropdown-item" href="./mission-vision.html">Our Mission and Vision</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="./why-choose-us.html">Why Choose Us</a></li>
          </ul>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./blog.html">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./Gallery.html">Gallery</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./contact.html">Contact Us</a>
        </li>
       
  </div>
</nav>
</div>
</div>
</div>
<div class="video-container">
  
  <video class="video" autoplay loop muted playsinline>
    <source src="./productpagevideo.mp4" type="video/mp4">
  </video>

  <div class="overlayer"></div>

  <h3 class="video-text">
   Complete Agrovet Solutions for Modern Farming
  </h3>

</div>



<div class="container">
  <div class="row">

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./Boviosta Gold.png" class="productimg">
    <p>Boviosta Gold</p>
  </a>
</div>
    </div>

     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./Boviosta cal.png " class="productimg">
    <p>Boviosta CAl</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./boviosta gel.png" class="productimg">
    <p>Boviosta Gel</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./websters.png" class="productimg">
    <p>Websters</p>
  </a>
</div>
    </div>
  </div> 
</div>



<div class="container">
  <div class="row">

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./Boviosta Advanve gel.png" class="productimg">
    <p>Boviosta Advance Gel</p>
  </a>
</div>
    </div>

     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./Rytime.png" class="productimg">
    <p>RyTime</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./Udder Guard Kit(UGK).png" class="productimg">
    <p>Udder Guard Kit(UGK)</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./Exopel vet.jpg" class="productimg">
    <p>Exopel Vet</p>
  </a>
</div>
    </div>
  </div> 
</div>




<div class="container">
  <div class="row">

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./Apozen.jpg" class="productimg">
    <p>Apozen</p>
  </a>
</div>
    </div>

     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./Mylogen.jpg" class="productimg">
    <p>Mylogen</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./Mustmilk.jpg" class="productimg">
    <p>Mustmilk</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./Calfokit.png" class="productimg">
    <p>Calfokit</p>
  </a>
</div>
    </div>
  </div> 
</div>





<div class="container">
  <div class="row">

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./Digescon.png" class="productimg">
    <p>Digescon</p>
  </a>
</div>
    </div>

     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./Boviup H.jpg" class="productimg">
    <p style="color: black; "> Boviup H</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./Beliton.png" class="productimg">
    <p>Beliton</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./AD Grow P.jpg" class="productimg">
    <p>AD Grow P</p>
  </a>
</div>
    </div>
  </div> 
</div>




<div class="container">
  <div class="row">

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./stickers.jpg" class="productimg">
    <p>stickers</p>
  </a>
</div>
    </div>

     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./saaf.png" class="productimg">
    <p style="color: black; "> Saaf</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./Rounder.jpg" class="productimg">
    <p>Rounder</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./antracol.jpg" class="productimg">
    <p>Antracol</p>
  </a>
</div>
    </div>
  </div> 
</div>



<div class="container">
  <div class="row">

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./bavistin.jpg" class="productimg">
    <p>Bavistin</p>
  </a>
</div>
    </div>

     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./kingstar.png" class="productimg">
    <p style="color: black; "> kingstar</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./king Mil 72.jpg" class="productimg">
    <p>King Mil 72</p>
  </a>
</div>
    </div>


     <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="product shadow p-5">
  <a href="product1.html">
    <img src="./Apozen.jpg" class="productimg">
    <p></p>
  </a>
</div>
    </div>
  </div> 
</div>


<div class="whatapp">
  <img src="./whatsapp.png" alt="">
</div>



  <div class="wholefooter">
  <div class="container">
<div class="footer">
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="innerfooter1">
         <img src="./logo.png" alt="" class="logo" style="margin-top: 10px;">
        <p style="padding-top: 30px;">KNK Agrovet is a trusted agricultural solutions provider in Nepal, delivering quality seeds, veterinary medicines, animal feed, and farm care products. We are committed to supporting farmers with reliable products and expert guidance for healthy animals and better harvests. Our mission is to improve farming productivity and ensure sustainable agriculture across Nepal.</p>
        </div>
      </div>

     <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="innerfooter2">
       <h4>OUR SERVICE</h4>
       <p><i class="ri-arrow-right-s-line"></i>About Us</p>
       <p><i class="ri-corner-down-right-fill"></i>Our Clients</p>
       <p><i class="ri-corner-down-right-fill"></i>Our Services</p>
       <p><i class="ri-corner-down-right-fill"></i>Our projects</p>
       <p><i class="ri-corner-down-right-fill"></i>Our Vission</p>
    </div>
    </div>
    
    <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="innerfooter3">
        <h4>USEFUL LINKS</h4>
        <p><i class="ri-arrow-right-s-line"></i>About</p>
        <p><i class="ri-arrow-right-s-line"></i>Contact Us</p>
        <p><i class="ri-arrow-right-s-line"></i> Product</p>
        <p><i class="ri-arrow-right-s-line"></i>Blog</p>
    </div>
    </div>
    </div>

     <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12"></div>
      <div class="col-lg-4 col-md-6 col-sm-12">
       <div class="images">
               <img src="./facebook.png" alt="">
                <img src="./viber.png" alt="">
                <img src="./whatsapp.png" alt="">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12"></div>
    </div>


</div>
</div>
</div> 
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>