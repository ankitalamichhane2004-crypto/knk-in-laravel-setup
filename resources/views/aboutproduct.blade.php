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



.page-header {
    text-align: center;
    padding: 40px 20px;
    background: rgba(255,255,255,0.9);
    backdrop-filter: blur(10px);
    box-shadow: 0 2px 20px rgba(0,0,0,0.1);
}

.page-header h1 {
    font-size: 3em;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 10px;
}

.page-header p {
    font-size: 1.2em;
    color: #7f8c8d;
}

/* Grid */
.product-grid {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

/* Card */
.product-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    position: relative;
    cursor: pointer;
}

.product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}

/* Image */
.product-image {
    width: 100%;
    height: 250px;
    background-size: cover;
    background-position: center;
    transition: transform 0.3s ease;
}

/* Animations (same logic) */
.card1 .product-image:hover { animation: shake 0.5s ease-in-out; }
.card2 .product-image:hover { animation: rotate 0.5s ease-in-out; }
.card3 .product-image:hover { animation: bounce 0.5s ease-in-out; }
.card4 .product-image:hover { animation: flip 0.5s ease-in-out; }
.card5 .product-image:hover { animation: pulse 0.5s ease-in-out; }
.card6 .product-image:hover { animation: slide 0.5s ease-in-out; }
.card7 .product-image:hover { animation: zoom 0.5s ease-in-out; }
.card8 .product-image:hover { animation: wiggle 0.5s ease-in-out; }
.card9 .product-image:hover { animation: glow 0.5s ease-in-out; }
.card10 .product-image:hover { animation: tilt 0.5s ease-in-out; }

/* Content */
.product-content {
    padding: 25px;
    text-align: center;
}

.product-category {
    font-size: 0.9em;
    color: #3498db;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 10px;
    font-weight: 600;
}

.product-title {
    font-size: 1.5em;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 15px;
}

.product-rating {
    color: #f39c12;
    font-size: 1.2em;
    margin-bottom: 15px;
}

.product-rating span {
    color: #95a5a6;
    font-size: 0.8em;
}

.product-price {
    font-size: 1.4em;
    font-weight: 700;
    color: #e74c3c;
    margin-bottom: 20px;
}

.product-price .old-price {
    text-decoration: line-through;
    color: #95a5a6;
    font-size: 0.9em;
    margin-right: 10px;
}

/* Button */
.product-btn {
    display: inline-block;
    padding: 12px 30px;
    background: linear-gradient(135deg, #151450 0%, #23228a 100%);
    color: white;
    text-decoration: none;
    border-radius: 30px;
    font-weight: 600;
    transition: all 0.3s ease;
    opacity: 0;
    transform: translateY(20px);
}

.product-card:hover .product-btn {
    opacity: 1;
    transform: translateY(0);
}

.product-btn:hover {
    background: linear-gradient(45deg, #2980b9, #21618c);
    transform: scale(1.05);
}

/* Badge & Wishlist */
.product-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: #e74c3c;
    color: white;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.8em;
    font-weight: 600;
}

.product-wishlist {
    position: absolute;
    top: 15px;
    left: 15px;
    color: #e74c3c;
    font-size: 1.5em;
    cursor: pointer;
}

.product-wishlist:hover {
    transform: scale(1.2);
}

/* Footer */
.site-footer {
    padding: 20px;
    background: linear-gradient(135deg, #151450 0%, #23228a 100%);
    color: #fff;
    text-align: center;
}

.site-footer a {
    color: #edbe00;
    font-weight: 600;
}

/* Responsive */
@media (max-width: 768px) {
    .product-grid {
        grid-template-columns: 1fr;
    }

    .page-header h1 {
        font-size: 2em;
    }
}




button {
	position: relative;
	background: linear-gradient(277deg, rgba(213, 213, 213, 0.1) 0%, rgba(213, 213, 213, 0.02) 50%,rgba(42, 42, 42, 0.02) 50%, rgba(42, 42, 42, 0.2) 100%),linear-gradient(295deg, rgba(73, 73, 73, 0.3) 0%, rgba(73, 73, 73, 0.1) 50%,rgba(229, 229, 229, 0.1) 50%, rgba(229, 229, 229, 0.03) 100%),linear-gradient(145deg, rgba(77, 77, 77, 0.1) 0%, rgba(77, 77, 77, 0.1) 50%,rgba(123, 123, 123, 0.1) 50%, rgba(123, 123, 123, 0.1) 100%),linear-gradient(54deg, rgba(51, 51, 51, 0.3) 0%, rgba(51, 51, 51, 0.1) 50%,rgba(29, 29, 29, 0.2) 50%, rgba(29, 29, 29, 0.03) 100%),linear-gradient(170deg, rgba(9, 9, 9, 0.02) 0%, rgba(9, 9, 9, 0.02) 50%,rgba(243, 243, 243, 0.02) 50%, rgba(243, 243, 243, 0.02) 100%),linear-gradient(264deg, rgba(214, 214, 214, 0.01) 0%, rgba(214, 214, 214, 0.01) 50%,rgba(153, 153, 153, 0.01) 50%, rgba(153, 153, 153, 0.01) 100%),linear-gradient(90deg, rgb(99, 48, 222),rgb(76, 212, 233));
	padding: 1em 1.5em;
	border: 1px solid black;
	border-radius: 25px 7px;
	color: white;
	text-transform: uppercase;
	letter-spacing: .1em;
	transition: all .7s ease;
	&:after {
		position: absolute;
		top: 20%;
		left: 50%;
		background: linear-gradient(45deg, rgb(46, 94, 149),rgb(59, 131, 209),rgb(67, 91, 142));
		width: 150px;
		height: 30px;
		content: '';
		transform: translate(-50%);
		border-radius: 25px 7px;
		filter: blur(20px);
		z-index: -1;
	}
	&:hover {
		border-radius: 7px 25px;
		background: linear-gradient(45deg, rgb(239, 7, 129) 0%, rgb(239, 7, 129) 6%,rgb(208, 10, 112) 6%, rgb(208, 10, 112) 25%,rgb(177, 13, 96) 25%, rgb(177, 13, 96) 40%,rgb(147, 16, 79) 40%, rgb(147, 16, 79) 45%,rgb(116, 19, 62) 45%, rgb(116, 19, 62) 53%,rgb(85, 22, 46) 53%, rgb(85, 22, 46) 66%,rgb(54, 25, 29) 66%, rgb(54, 25, 29) 100%);
		letter-spacing: .2em;
		border: 1px solid white;
	}
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
    <source src="./ankitavideo.mp4" type="video/mp4">
  </video>

  <div class="overlayer"></div>

  <h3 class="video-text">
    From Soil to Success
  </h3>

</div>




 <div class="page-header">
        <h1>Premium Product Collection</h1>
        <p>Discover our latest and best products</p>
    </div>

    <!-- Product Grid -->
    <div class="product-grid">

        <!-- Card 1 -->
        <div class="product-card card1">
            <div class="product-badge">New</div>
            <div class="product-wishlist">♥</div>
            <div class="product-image"><img src="./Boviup H.jpg" alt="" class="product-image"></div>
            <div class="product-content">
                <h2 class="product-title">Boviup</h2>
                <div class="product-rating">★★★★★ <span>(4.8)</span></div>
                <div class="product-price">
                    <span class="old-price">Rs250</span>Rs200
                </div>
                <a href="#" class="product-btn">Buy Now</a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="product-card card2">
            <div class="product-badge">New</div>
            <div class="product-wishlist">♥</div>
            <div class="product-image"><img src="./saaf.png" alt="" class="product-image"></div>
            <div class="product-content">
                <h2 class="product-title">Saaf</h2>
                <div class="product-rating">★★★★★ <span>(4.9)</span></div>
                <div class="product-price">
                    <span class="old-price">Rs899</span> Rs749
                </div>
                <a href="#" class="product-btn">Buy Now</a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="product-card card3">
            <div class="product-badge">Best Seller</div>
            <div class="product-wishlist">♥</div>
            <div class="product-image"><img src="./Beliton.png" alt="" class="product-image"></div>
            <div class="product-content">
                <h2 class="product-title">Beliton</h2>
                <div class="product-rating">★★★★★ <span>(4.7)</span></div>
                <div class="product-price">
                    <span class="old-price">Rs199</span> Rs149
                </div>
                <a href="#" class="product-btn">Buy Now</a>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="product-card card4">
            <div class="product-badge">Best seller</div>
            <div class="product-wishlist">♥</div>
            <div class="product-image" ><img src="./bavistin.jpg" alt="" class="product-image"></div>
            <div class="product-content">

                <h2 class="product-title">Bavistin</h2>
                <div class="product-rating">★★★★★ <span>(4.6)</span></div>
                <div class="product-price">
                    <span class="old-price">Rs299</span> Rs219
                </div>
                <a href="#" class="product-btn">Buy Now</a>
            </div>
        </div>

 

     <div class="product-card card5">
            <div class="product-badge">Best seller</div>
            <div class="product-wishlist">♥</div>
            <div class="product-image" ><img src="./Calfokit.png" alt="" class="product-image"></div>
            <div class="product-content">

                <h2 class="product-title">Calfokit</h2>
                <div class="product-rating">★★★★★ <span>(4.6)</span></div>
                <div class="product-price">
                    <span class="old-price">Rs200</span> Rs170
                </div>
                <a href="#" class="product-btn">Buy Now</a>
            </div>
        </div>
</div>
    </div>

    

<div class="container">
  <a href="./product.html">
  <center>
<button>View Product</button>
</center>
</div>
</a>
    
</body>
</html>