<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css"
    rel="stylesheet"
/>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
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


.parts1{
        display: flex;
        justify-content: space-around;
        align-content: center;
        padding: 10px;
       gap: 1opx;
       padding-top: 20px;
       
    }

 .section{
      
        border:  10px dotrgb(33, 189, 56)lack;
        background-color: white;
       
    }

    .images2:hover{
        opacity: 1;
        transform: scale(1.2);
    }
    .images2{
        height: 200px;
        width: 200px;
        border-radius: 50%;
        opacity: 0.8;
        
    }


.section1{
        display: flex;
        
        justify-content: center;
       align-content: center;
        border: 1px solid bisque;
        background-color: rgb(231, 229, 240);
        overflow: hidden;
    }

    .cow{
        height: 500px;
        width: 500px;
        padding: 50px;
        border-radius: 20px;
    }
    .content1{
     line-height: 30px;
    }
    .read-more{
        padding: 10px;
        border: 1px solid grey;
        border-radius: 20px;
        background-color: rgb(147, 86, 204);
        color: white;
        box-shadow: 5px 5px 5px rgb(183, 140, 224);
        transition: 1s;
    }
    .read-more:hover{
        background-color: red;
    }
    .sectionss{
    background-color: #e7e5f0 ;
    
    }

    /* swiper bala ko css */
  .testimonial-slider-rtl {
    width: 100%;
    height: 80%;
    padding: 70px 0!important ; /* top 70px, bottom 70px */
    overflow: hidden;
}
    .swiper-button-next {
      left: 10px; /* Adjust position for RTL */
      right: auto;
    }
    .swiper-button-prev {
      right: 10px; /* Adjust position for RTL */
      left: auto;
    }
.testimonial-slider-rtl img{
    width: 100%;
    height: 300px;
    object-fit: cover;
    display: block;
}





/* reveiw card css */

.our-services {
  margin-top:  0px !important;
}
.flip-container {
  -webkit-perspective: 1000;
  margin: 0 auto 60px auto;
  width: 320px;
  height: 200px;
  border-radius: 15px;
  cursor:pointer;
}

.flip-container:hover .flipper {
  -webkit-transform: rotateY(180deg);
  cursor:pointer;
}
.flip-container.hover .flipper {
  -webkit-transform: rotateY(180deg);
  cursor:pointer;
}

.front {
  width: 320px;
  height: 200px;
  border-radius: 15px;
  -webkit-backface-visibility: hidden;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
}

.front h3 {
  text-align: center;
  font-size: 18px;
  font-family: "Poppins", sans-serif;
  color: white;
}

.front img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 10px;
}

.back {
  width: 320px;
  height: 200px;
  border-radius: 15px;
  -webkit-backface-visibility: hidden;
  position: absolute;
  top: 0;
  left: 0;
  -webkit-transform: rotateY(180deg);
  text-align: center;
  font-size: 18px;
  font-family: "Poppins", sans-serif;
  color: white;
}

.back h3 {
  margin-top: 20px;
}

.back p {
  font-size: 14px;
  font-family: "Poppins", sans-serif;
  margin-right:15px;
}

.flipper {
  -webkit-transition: 0.6s;
  -webkit-transform-style: preserve-3d;
  position: relative;
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
</head>
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
    <source src="./ankitavideo.mp4" type="video/mp4">
  </video>

  <div class="overlayer"></div>

  <h3 class="video-text" data-aos="fade-right" data-aos-duration="3000">
  Quality Agrovet Products for Healthy Farming
  </h3>

</div>



<div class="container">
<div class="section" style="margin: 50px;">
    <h1 style="color:  #04803b;  font-family: Livvic; padding-top: 20px;"><center>From seed to success, we walk with farmers.</center></h1>
   <div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="parts1">
        <img src="./goat.jpg" alt="" class="images2">
    </div>
    </div>
   <div class="col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="parts1">
        <img src="./tomato.jpeg" alt="" class="images2">
    </div>
    </div>
     <div class="col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="parts1">
         <img src="./plant image.jpg" alt="" class="images2">
    </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="parts1">
         <img src="./pesticide.jpg" alt="" class="images2">
    </div>
    </div>
    </div>
    </div>
   </div>
   





   <div class="sectionss">
   <div class="container">
   <div class="section1">
    <div class="row">
      <div class="col-lg-6 col-md-12">
    <div data-aos="fade-right" data-aos-duration="3000">
    <div class="content1"><center>
    <h3 style="color: #04803b; padding-top: 20px;">All You Need to Know About</h3>
    <h4 style="color: #04803b;">Who We Are</h4>
    <p style="font-family: livvic; padding: 10px;">KNK Agrovet is a highly trusted and dedicated company committed to the growth and development of Nepal’s poultry and livestock industry. We specialize in providing a wide range of high-quality veterinary products, animal health solutions, and agricultural inputs that cater to the unique needs of farmers across the country. Our mission is to support farmers by promoting healthy livestock, improving farm productivity, and ensuring sustainable agricultural practices.<br>

At KNK Agrovet, we work closely with farmers, veterinarians, and animal health professionals to deliver reliable and effective solutions that enhance animal welfare and optimize farm operations. From preventive care and nutritional supplements to disease management and innovative agricultural products, we strive to offer comprehensive support that empowers farmers to achieve success.
</p>

<button class="read-more" style="margin-bottom: 30px;">Read More</button>
    </div></center>
    </div>
    </div>


      <div class="col-lg-6 col-md-12">
    <div data-aos="fade-left" data-aos-duration="3000">
    <div class="content2">
     <img src="./cow.jpg" alt="" class="cow">
    </div>
    </div>
   </div>
   </div>
   </div>
   </div>
   </div>







<div class="swiper-container testimonial-slider-rtl" dir="rtl">
  <div class="swiper-wrapper">
   <div class="swiper-slide"><img src="./swiperimage1.png"></div>
   <div class="swiper-slide"><img src="./swiperimage2.png"></div>
   <div class="swiper-slide"><img src="./swiperimage7.png"></div>
   <div class="swiper-slide"><img src="./swiperimage4.png"></div>
   <div class="swiper-slide"><img src="./swiperimage5.png"></div>
   <div class="swiper-slide"><img src="./swiperimage3.png"></div>
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
  <!-- Add Navigation -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!-- 
swiper ko js -->
<script>
  jQuery(document).ready(function () {
  if (jQuery('.testimonial-slider-rtl').length) {
    const reviewsCarouselOptions = {
      slidesPerView: 3.5,
      spaceBetween: 30,
      loop: true,
      speed: 7500, // controls how fast the slides move
      grabCursor: false,
      mousewheel: {
        enabled: false,
      },
      keyboard: {
        enabled: false,
      },
      allowTouchMove: false,
      autoHeight: false,
      initialSlide: 0,
      autoplay: {
        delay: 0, // delay must be very low
        disableOnInteraction: false,
      },
      loopedSlides: 10, // helps with seamless loop
    };

    const reviewsCarousel = new Swiper(".testimonial-slider-rtl", reviewsCarouselOptions);
  }
});

</script>







  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
  AOS.init();
</script>



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>





<!-- review card -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<div class="container our-services">
  <div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="flip-container">
        <div class="flipper">
          <div class="front" style="background:  #04803b !important;">
            <img class="lazyload" src="./review-image1.jpg" alt="Avatar" style="width:150px;height:150px;">
            <h3>Sarmila Thapa</h3>
          </div>
          <div class="back" style="background: #04803b !important;">
            <h5>Poultry Fram Owner</h5>
            <p>High-quality veterinary products that improve bird health and farm performance. KNK Agrovet is a reliable and trusted partner.”
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="flip-container">
        <div class="flipper">
          <div class="front" style="background:  #036AAA;">
            <img class="lazyload" src="./review-image2.jpg" alt="Avatar" style="width:150px;height:150px;">
            <h3>Shiva Subedi</h3>
          </div>
          <div class="back" style="background:  #036AAA;">
            <h5>Tomato Farming</h5>
            <p>“Effective fertilizers and crop protection products from KNK Agrovet improved tomato growth and disease control.”</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="flip-container">
        <div class="flipper">
          <div class="front" style="background: #04803b;">
            <img class="lazyload" src="./review-image3.jpg" alt="Avatar" style="width:150px;height:150px;">
            <h3>Ram Devkota</h3>
          </div>
          <div class="back" style="background:  #04803b;">
            <h5>ELDERLY REHAB</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, distinctio.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
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


<div class="whatapp">
  <img src="./whatsapp.png" alt="">
</div>


  </body>


</html>