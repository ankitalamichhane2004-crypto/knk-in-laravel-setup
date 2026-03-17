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
</head>
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
.navheader{
  position: sticky !important;
  display: flex;
   position: sticky;
   top: 0px;
  z-index: 1000;
  background-color:#F8F9FA ;
 
}


.why_choose{ 
  width:100%; 
  margin: 0 0 50px; 
  font-family: 'Raleway', sans-serif; 
}
.why_choose_head{ 
  width:100%; 
  text-align:center; 
  padding:30px;
}
.why_choose_head h1{ 
  width:100%; 
  color: #000000; 
  text-align:center; 
  font-size:32px; 
  font-family: 'Raleway-Medium', sans-serif;
}
.why_choose_head h1 span{ 
  border-bottom: 2px solid #a2437e; 
}
.text-down { 
  position:relative; 
  overflow:hidden;
}
.text-down img{ 
  width:100%; 
  height:200px;
}
.text-down .textbox { 
  width:100%; 
  height:300px; 
  position:absolute; 
  top:0; 
  left:0; 
  margin-top:-255px;
  -webkit-border-radius:50px; 
  -moz-border-radius:50px; 
  -ms-border-radius:50px; 
  border-radius:5px;
  background-color: #a2437e61; 
  -webkit-transition: all 0.7s ease; 
  transition: all 0.7s ease; 
}
.text-down:hover .textbox { 
  margin-top:0;
}
.details{ 
  width:100%; 
  padding: 30px 30px 0;  
  text-align:center; 
  color:rgba(255,255,255,1); 
  font-size:16px;
  font-family: 'Raleway-Light', sans-serif; 
}
.view-more{ 
  width:100%; 
  padding-top:0;  
  text-align:center; 
  color:rgba(255,255,255,1); 
  font-size:20px;
  font-weight:bold;
}
.text { 
  text-align:center; 
  padding-top: 70px; 
  color:rgba(255,255,255,1); 
  font-size:20px;
  font-family: 'Raleway-Light', sans-serif; 
}
.top { 
  padding-top:10px;
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




<div class="why_choose">
  		<div class="container">
  			<div class="row">
  				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  				    <div class="why_choose_head">
  					    <h1 style="color: green;">W<span>HY CHOOS</span>E US?</h1>
  					</div>
  				</div>
  			</div>
        
  		    <div class="row">
  		        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 top">
  			        <div class="text-down">
  			            <img src="./whyimg1.jpg" alt="PN">
  			            <div class="textbox">
  			                <p class="details">We provide only genuine and certified veterinary medicines, feed supplements, seeds, and agricultural inputs. Our products are carefully selected to ensure maximum productivity and animal health.</p>
  			                <p class="view-more"><a href="#"><button class="btn-success btn btn-sm">View More</button></a></p>
  			                <p class="text">Close-up of quality product </p>
  			            </div>
  			        </div>
  		        </div>

  		        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 top">
  		            <div class="text-down">
  			            <img src="./whyimg2.jpg" alt="PN">
  			            <div class="textbox">
  			                <p class="details">With over a decade of experience in the agrovet sector, we understand the real needs of farmers and livestock owners. Our knowledge helps farmers make the right choice at the right time.</p>
  			                <p class="view-more"><a href="#"><button class="btn-success btn btn-sm">View More</button></a></p>
  			                <p class="text">Farmer discussion</p>
  			            </div>
  		            </div>
  		        </div>

  		        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 top">
  		            <div class="text-down">
  			            <img src="./whyimg3.jpg" alt="PN">
  			            <div class="textbox">
  			                <p class="details">We don’t just sell products — we guide farmers with proper usage, dosage, and farming techniques to ensure better results and reduced losses.</p>
  			                <p class="view-more"><a href="#"><button class="btn-success btn btn-sm">View More</button></a></p>
  			                <p class="text">Build Trust</p>
  			            </div>
  		            </div>
  		        </div>
  		    </div>
        
  		    <div class="row">
  		        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 top">
  		            <div class="text-down">
  			            <img src="./whyimg4.jpg" alt="PN">
  			            <div class="textbox">
  			                <p class="details">From livestock medicines to poultry, seeds, fertilizers, and farming essentials — everything is available under one roof for your convenience.</p>
  			                <p class="view-more"><a href="#"><button class="btn-success btn btn-sm">View More</button></a></p>
  			                <p class="text">Easy for all</p>
  			            </div>
  		            </div>
  		        </div>
  		        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 top">
  		            <div class="text-down">
  			            <img src="./whyimg5.jpg" alt="PN">
  			            <div class="textbox">
  			                <p class="details">We believe in fair pricing and long-term relationships. Our focus is on customer satisfaction, not just sales.</p>
  			                <p class="view-more"><a href="#"><button class="btn-success btn btn-sm">View More</button></a></p>
  			                <p class="text">Sustainable</p>
  			            </div>
  		            </div>
  		        </div>
  		        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 top">
  		            <div class="text-down">
  			            <img src="./whyimg7.jpg" alt="PN">
  			            <div class="textbox">
  			                <p class="details">Hundreds of farmers trust KNK Agrovet for consistent quality, reliable advice, and friendly service.</p>
  			                <p class="view-more"><a href="#"><button class="btn-success btn btn-sm">View More</button></a></p>
  			                <p class="text">High Quality seeds</p>
  			            </div>
  		            </div>
  		        </div>
  	        </div>
  	    </div>
  	</div>

    
</body>
</html>