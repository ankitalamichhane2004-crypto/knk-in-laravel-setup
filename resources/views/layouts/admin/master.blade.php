<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ultimate Dashboard</title>

<style>
body { margin:0; font-family:Arial; background:#f4f6f9; }
.container { display:flex; }

/* Sidebar */
.sidebar {
  width:250px; background:#2c3e50; color:#fff;
  height:100vh; position:fixed;
}
.sidebar h2 { text-align:center; padding:20px; }
.sidebar a {
  display:block; padding:15px;
  color:#fff; text-decoration:none;
}
.sidebar a:hover { background:#34495e; }

/* Main */
.main { margin-left:250px; width:100%; }

/* Header */
.header {
  background:#2980b9; color:#fff;
  padding:15px;
  display:flex;
  justify-content:space-between;
}

/* Page */
.page { display:none; padding:20px; }
.page.active { display:block; }

/* Box */
.box {
  background:#fff; padding:20px;
  margin-top:20px;
  border-radius:10px;
}

/* Table */
table {
  width:100%; border-collapse:collapse;
  margin-top:20px;
}
th, td {
  padding:10px; border:1px solid #ddd;
}
th { background:#2980b9; color:#fff; }

/* Inputs */
input, textarea {
  width:100%; padding:8px;
  margin:5px 0;
}

/* Buttons */
button {
  padding:8px 12px;
  border:none;
  color:#fff;
  background:green;
  cursor:pointer;
}
.delete { background:red; }

/* LOGIN PAGE */
#loginPage {
  display:flex;
  justify-content:center;
  align-items:center;
  height:100vh;
  background:#2c3e50;
}

/* RESPONSIVE */
@media (max-width:768px){
  .sidebar {
    width:100%;
    height:auto;
    position:relative;
  }
  .main {
    margin-left:0;
  }
  .container {
    flex-direction:column;
  }
}
</style>
</head>

<body>

<!-- LOGIN -->
<div id="loginPage">
  <div style="background:#fff;padding:30px;border-radius:10px;width:300px;text-align:center;">
    <h2>Login</h2>
    <input id="username" placeholder="Username">
    <input id="password" type="password" placeholder="Password"><br><br>
    <button onclick="login()">Login</button>
  </div>
</div>

<!-- DASHBOARD -->
<div class="container" id="dashboard" style="display:none;">

<!-- Sidebar -->
@include('layouts.admin.sidebar')

<!-- Main -->
<div class="main">

@include('layouts.admin.header')

@yield('content')

<script>
function login(){
  if(username.value==="admin" && password.value==="1234"){
    loginPage.style.display="none";
    dashboard.style.display="flex";
  } else alert("Wrong login!");
}

function logout(){
  location.reload();
}

function showPage(p){
  document.querySelectorAll('.page').forEach(x=>x.classList.remove('active'));
  document.getElementById(p).classList.add('active');
}

/* PRODUCTS */
let products=JSON.parse(localStorage.getItem("products"))||[];
function addProduct(){
  products.push({id:Date.now(),n:pname.value,p:pprice.value});
  localStorage.setItem("products",JSON.stringify(products));
  pname.value="";pprice.value="";
  showProducts();
}
function showProducts(){
  productTable.innerHTML="<tr><th>ID</th><th>Name</th><th>Price</th><th>Action</th></tr>";
  products.forEach(x=>{
    productTable.innerHTML+=`<tr>
    <td>${x.id}</td><td>${x.n}</td><td>${x.p}</td>
    <td><button class="delete" onclick="delProduct(${x.id})">Delete</button></td></tr>`;
  });
}
function delProduct(id){
  products=products.filter(x=>x.id!=id);
  localStorage.setItem("products",JSON.stringify(products));
  showProducts();
}

/* ABOUT */
function saveAbout(){localStorage.setItem("about",aboutText.value);loadAbout();}
function loadAbout(){aboutDisplay.innerText=localStorage.getItem("about")||"";}

/* MISSION */
function saveMission(){localStorage.setItem("mission",missionText.value);loadMission();}
function loadMission(){missionDisplay.innerText=localStorage.getItem("mission")||"";}

/* BLOG */
let blogs=JSON.parse(localStorage.getItem("blogs"))||[];
function addBlog(){
  blogs.push({t:blogTitle.value,c:blogContent.value});
  localStorage.setItem("blogs",JSON.stringify(blogs));
  showBlog();
}
function showBlog(){
  blogList.innerHTML="";
  blogs.forEach((b,i)=>{
    blogList.innerHTML+=`<div class="box">
    <h3>${b.t}</h3><p>${b.c}</p>
    <button class="delete" onclick="delBlog(${i})">Delete</button></div>`;
  });
}
function delBlog(i){blogs.splice(i,1);localStorage.setItem("blogs",JSON.stringify(blogs));showBlog();}

/* GALLERY */
let imgs=JSON.parse(localStorage.getItem("imgs"))||[];
function addImage(){
  let f=imgInput.files[0];
  let r=new FileReader();
  r.onload=e=>{
    imgs.push(e.target.result);
    localStorage.setItem("imgs",JSON.stringify(imgs));
    showGallery();
  };
  r.readAsDataURL(f);
}
function showGallery(){
  galleryList.innerHTML="";
  imgs.forEach((img,i)=>{
    galleryList.innerHTML+=`<div class="box">
    <img src="${img}" width="100%">
    <button class="delete" onclick="delImg(${i})">Delete</button></div>`;
  });
}
function delImg(i){imgs.splice(i,1);localStorage.setItem("imgs",JSON.stringify(imgs));showGallery();}

/* CONTACT */
let msgs=JSON.parse(localStorage.getItem("msgs"))||[];
function addMsg(){
  msgs.push({n:cname.value,m:cmsg.value});
  localStorage.setItem("msgs",JSON.stringify(msgs));
  showMsg();
}
function showMsg(){
  contactList.innerHTML="";
  msgs.forEach((m,i)=>{
    contactList.innerHTML+=`<div class="box">
    <b>${m.n}</b><p>${m.m}</p>
    <button class="delete" onclick="delMsg(${i})">Delete</button></div>`;
  });
}
function delMsg(i){msgs.splice(i,1);localStorage.setItem("msgs",JSON.stringify(msgs));showMsg();}

/* LOAD */
showProducts(); loadAbout(); loadMission(); showBlog(); showGallery(); showMsg();
</script>

</body>
</html>