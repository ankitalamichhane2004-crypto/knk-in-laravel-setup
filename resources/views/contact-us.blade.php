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


.contact-form{
    width: 400px;
    background-color:rgb(183, 214, 237);
    padding: 20px;
    border-radius: 20px;
    box-shadow: 6px 4px 30px 0px rgb(195, 195, 209);
    margin-left: 50px;
    
}
.contact-form label{
    color: rgb(66, 66, 66);
    display: block;
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 20px;
    font-weight: 600;
    font-family: 'Courier New', Courier, monospace;         
}
.contact-form input{
    width: 90%;
    height: 20px;
    border: 0;
    background-color: rgb(230, 227, 227);
    /* border: 1px solid purple; */
    border-radius: 10px;
    box-shadow: 1px 1px 80px 0px rgb(231, 202, 231);
    padding: 20px;
}
.contact-form input:focus{
    border: 2px solid rgb(176, 176, 239);
    outline: 0;
    box-shadow: 4px 3px 10px red;
}
.gender{
    width: 50px !important;
}
button{
    background-color: purple;
    color: white;
    border: 0;
    padding: 10px 20px;
    border-radius: 20px;
    margin: 10px;
}
#errormsg{
    color: red;
}

 
 .whole{
    margin: 10px;
    padding-top: 40px;
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

  

    <div class="container">
        <div class="whole">
        <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="googlemap">
                <h3 style="color: green;">Our Store Location</h3>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.0591478227298!2d84.50121577492224!3d27.68456672649685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994e53b8b3288bb%3A0xd140c1a23cfced71!2sKnk%20agrovet!5e0!3m2!1sen!2snp!4v1767191040145!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>



            
            <div class="col-lg-6 col-md-12">
     
    <div class="form-section">
        <form action="" class="contact-form" onsubmit="return validateform()">

         <div>
            <label for="name">Name</label>
            <input type="text"  placeholder="Enter your name"  name="name"  id="name" >
         </div>
         <p id="errormsg-name"></p>
         

         <div>
            <label for="email">Email</label>
            <input type=""  placeholder="Enter your email"   value=""  id="email">
         </div>
         <p id="errormsg-email"></p>

          <div>
            <label for="number">Number</label>
            <input type="number"  placeholder="Enter your number"   value="" id="number" >
         </div>
         <p id="errormsg-number"></p>

          <div>
            <label for="password">Password</label>
            <input type="password"  placeholder="Enter your Password"   value="" id="password" >
         </div>
         <p id="errormsg-password"></p>
        
         <div>
             <label for="">Message</label>
             <textarea name="" id="message" rows="6"></textarea>
           </div>
           <p id="errormsg-mssg"></p>

           <button>Submit</button>
          </form>

          <script>
            function validateform(){
                let name=document.getElementById('name').value.trim();
                let email=document.getElementById('email').value.trim();
                let number=document.getElementById('number').value.trim();
                let password=document.getElementById('password').value.trim();
                
                let errormsg=document.getElementById('errormsg-name');
                 let errormsgemail=document.getElementById('errormsg-email');
                let emailpattern='^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$';
                let numberpattern=/^[0-9]{10}$/;
                let message=document.getElementById('message').value;
              let valid =true;
                if(name===""){
                errormsg.innerHTML='enter your name';
                valid= false;
                }

                
                if(email===""){
                errormsgemail.innerHTML='enter your email';
               valid= false;
                }

                
                if(!email.match(emailpattern)){
                    errormsg.innerHTML="enter valid email";
                    return false;
                }

              if(!number.match(numberpattern)){
                errormsg.innerHTML="enter a valid number";
                return false;
              }

               if(name===""){
                errormsg.innerHTML='enter your password';
                return false;
                }


            if(message.length<10){
                errormsg.innerHTML="enter at least 10 words";
                return false;
            }
               
            }
            
          </script>
    </section>
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