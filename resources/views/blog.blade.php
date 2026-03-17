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
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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

.wholecard{
  width: 300px;
 
}

.card{
    
    width: 300px;
    border: 1px solid green;
    margin: 10px;
    flex-shrink: 0;
    margin: 20px;
    overflow: hidden;
    
    
}
    
.card:hover img{
  
  transform: scale(1.1);
  transition: 1s;
  
  
}


.cardimg{
    height: 200px;
    width:100%;
}
.heart{
    background-color: antiquewhite;
    padding: 15px;
    border-radius: 50%;
    color: red;
    position:absolute ;
   top: 10px;      
    right: 10px; 
     cursor: pointer;
}
.card:hover heart{
  background-color: crimson;
    color: white;
    box-shadow: 0 0 10px red;
}

   h4{
    padding: 5px;
   } 
   p{
    padding: 5px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 6;
    overflow: hidden;
    word-break: break-all;
    text-overflow: ellipsis;
    line-height: 20px;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
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
    <source src="hen.mp4" type="video/mp4">
  </video>

  <div class="overlayer"></div>

  <h3 class="video-text">
    Healthy Animals, Better Farming, Brighter Future
  </h3>

</div>




         <div class="container">
          <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-12  ">
              <div class="wholecard">
              <div class="card shadow">
             <img src="./card2.goat.jpg" alt="" class="cardimg">
            <i class="ri-heart-line heart"></i>
            <h4 style="color: rgb(10, 146, 10); padding: 10px;">Trusted Goat Healthcare</h4>
            <p>We are dedicated to supporting goat farmers with comprehensive healthcare solutions that ensure the health and productivity of their herds. Our range of high-quality vaccines, medicines, and nutritional supplements protects goats from common and serious diseases while promoting strong growth and development. By improving immunity, enhancing milk yield, and increasing meat production, our trusted products help farmers achieve healthier animals and higher profitability. With our expertise and commitment, goat farmers can confidently raise healthier herds and grow their farming business sustainably.</p>
        </div>
        </div>
        </div>


          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="wholecard">
            <div class="card shadow">
           <img src="./card3.fish.jpg" alt="" class="cardimg">
            <i class="ri-heart-line heart"></i>
            <h4 style="color: rgb(10, 146, 10); padding: 10px;">Reliable Fish Health </h4>
            <p>We support fish farmers with high-quality healthcare solutions to ensure healthy and productive aquaculture. Our range of medicines, vaccines, and nutritional supplements helps prevent diseases, improve growth rates, and enhance overall fish health. By promoting better immunity and optimal development, our trusted products contribute to higher yield, improved quality, and increased profitability for fish farmers. With our expertise and reliable solutions, farmers can confidently maintain healthy fish and achieve sustainable aquaculture success.</p>
            </div>
        </div>
        </div>
       
        
         <div class="col-lg-4 col-md-6 col-sm-12 ">
          <div class="wholecard">
        <div class="card shadow">
             <img src="./plant image - Copy.jpg" alt="" class="cardimg">
            <i class="ri-heart-line heart"></i>
            <h4 style="color: rgb(10, 146, 10); padding: 10;">Seeds & Plant Growth</h4>
            <p>Choosing well-tested and certified seeds is one of the most important decisions a farmer can make for successful and safe farming. High-quality seeds are specially selected and tested to ensure better germination, strong plant growth, and resistance against common pests and diseases. When you use reliable seeds, your crops grow more uniformly, mature on time, and produce higher yields with better quality. Well-tested seeds also adapt better to different weather conditions and soil types, reducing the risk of crop failure. In addition, certified seeds help reduce dependence on excessive fertilizers and chemicals because healthy plants naturally fight infections and stress. By investing in trusted seeds from a reliable agrovet source, farmers can protect their fields, save money in the long run, and ensure a profitable harvest every season.</p>
        </div>
        </div>
        </div>
        </div>
        </div>
       




        <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-12  ">
              <div class="wholecard">
              <div class="card shadow">
             <img src="../crop protection.png" alt="" class="cardimg">
            <i class="ri-heart-line heart"></i>
            <h4 style="color: rgb(10, 146, 10); padding: 10px;">Protect Every Crop</h4>
            <p>Protecting crops is essential for achieving a healthy harvest and maximizing farm income. Timely fertilization provides crops with the nutrients they need at different growth stages, helping plants grow stronger and produce better yields. At the same time, proper pest and disease management prevents insects, weeds, and infections from damaging crops. Regular field inspection allows early detection of problems, making treatment more effective and less costly. Using the right pesticides and fertilizers at the correct time and in the right dosage minimizes crop loss and improves quality. Effective crop protection also reduces the risk of complete failure due to unexpected pest attacks or nutrient deficiency. By following a planned crop protection strategy and using quality agrovet products, farmers can ensure better production, protect their investment, and enjoy higher profits each season.
            </p>
            </div>
            </div>
        </div>


          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="wholecard">
            <div class="card shadow">
           <img src="./nutrition.jpg" alt="" class="cardimg">
            <i class="ri-heart-line heart"></i>
            <h4 style="color: rgb(10, 146, 10); padding: 10px;">Feed Decides Growth </h4>
            <p>Feed plays a major role in the overall growth, health, and productivity of farm animals and poultry. A complete and balanced diet provides essential nutrients such as proteins, vitamins, minerals, and energy that support proper body development and strong immunity. When animals receive the right feed, they grow faster, produce better quality milk, meat, and eggs, and become more resistant to diseases. Good nutrition also improves digestion, bone strength, fertility, and overall performance. On the other hand, poor feeding can result in slow growth, weak immunity, and higher chances of illness, causing financial loss to farmers. By choosing quality feed and nutritional supplements from a trusted agrovet, farmers can ensure better animal health, improved farm output, and long-term profitability.</p>
            </div>
        </div>
        </div>
        


         <div class="col-lg-4 col-md-6 col-sm-12 ">
          <div class="wholecard">
        <div class="card shadow">
             <img src="../business.webp" alt="" class="cardimg">
            <i class="ri-heart-line heart"></i>
            <h4 style="color: rgb(10, 146, 10); padding: 10;">Farm as business</h4>
            <p>Farming should be managed like a business to achieve long-term success and higher income. Proper planning helps farmers decide what to grow or raise, when to invest, and how to manage resources efficiently. Keeping accurate records of expenses, production, sales, and health treatments allows farmers to understand profit and loss clearly. When records are maintained properly, it becomes easier to identify problems, improve weak areas, and make better decisions for the next season. Farm business planning also helps in managing risks, accessing loans or support programs, and setting financial goals. By treating farming as a business, farmers can control costs, increase productivity, and achieve stable and sustainable income growth.</p>
        </div>
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
 








        

    


         <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
         <script>
  AOS.init();
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>