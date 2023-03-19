<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link rel="stylesheet" href="stylesheetH.css"> -->
    <style>
        *{
    margin: 0;
    padding: 0;
    font-family: 'Kanit', sans-serif;
    /* font-family: 'Popines', sans-serif; */
}
#banner{
    background: url(bgH.jpg);
    background-size: cover;
    background-position: center;
    height: 100vh;
}
.logo{
    width: 170px;
    position:absolute;
    top:1%;
    left:10;
}
.banner-text{
    text-align: center;
    color: #104961;
    padding-top: 300px;
}
.banner-text h1{
    font-size: 60px;
}
.banner-text p{
    font-size: 50px;
    font-style: italic;
    padding: 80px;
}
#sideNav{
    width: 250px;
    height: 100vh;
    position: fixed;
    right: -250px;
    top: 0;
    background:#104961;
    z-index: 2;
    transition: 0.5s;
}
nav ul li{
    list-style: none;
    margin: 50px 20px;
}
nav ul li a{
    text-decoration: none;
    color:azure;
}
#menuBtn{
    width: 50px;
    height: 50px;
    background: #104961;
    text-align: center;
    position: fixed;
    right: 30px;
    top: 20px;
    border-radius: 3px;
    z-index: 3;
    cursor: pointer;
}
#menuBtn img{
    width: 20px;
    margin-top: 15px;
}
@media screen and (max-weight: 770px){
    .banner-text h1{
        font-size: 60px;
    }
}
/* features */
#features{
    width: 100%;
    padding: 70px 0;
}
.title-text{
    text-align:center;
    padding-bottom: 70px;
}
.title-text p{
    margin: auto;
    font-size: 40px;
    color:#104961 ;
    font-weight: bold;
    position: relative;
    z-index: 1;
    display: inline-block;
}
.title-text p::after{
    content: '';
    width: 50px;
    height: 35px;
    background: linear-gradient(#195780,#33AEFF);
    position: absolute;
    top:-20px;
    left: 0;
    z-index: -1;
    transform: rotate(10deg);
    border-top-left-radius: 35px;
    border-bottom-right-radius: 35px;
}
.title-text h1{
    font-size: 50px;
    padding: 30px;
}
.features-box{
    width: 80%;
    margin:auto;
    display:flex;
    flex-wrap: wrap;
    align-items: center;
    text-align: center;
}
.features{
    flex-basis: 50%;
}
.feartures-img img{
    flex-basis: 50%;
    margin: auto ;
}
.feartures-img img{
    width: 70%;
    border-radius: 10px;
}
.features h1{
    text-align: left;
    margin-bottom: 10px:
    font-weight: 100;
    color:#009688;
}
.features-desc{
    display: flex;
    align-items: center;
    margin-bottom: 40px;
}
.feature-icon .fa-regular{
    width: 50px;
    height: 50px;
    font-size: 30px;
    line-height: 50px;
    border-radius: 8px;
    color: #009688;
    border: 1px solid #009688;
}
.feature-text{
    padding: 0 20px;
    text-align: inotial;
}

/* .inactiveLink {
    pointer-events: none;
    cursor: default; */


    </style>
</head>
<body>
    <section id="banner">
        <img src="vaccinelogo.jpg" class="logo">
        <!-- <p>
            vaccine
        </p> -->
        <div class="banner-text">
            <h1 class="testero"> Vaccine Booking System</h1>
            <p>Getting Vaccinated is the best way to protect our child</p>
</section>
<?php include('navbarx.php')?>
<!-- features -->
<section id="features">
    <div class="title-text">
        <p> Features</p>
        <h1>SAFE AND EFFECTIVE</h1>
</div>
<div class="features-box">
    <div class="features">
        <h1> SAFTY FIRST</h1>
        <div class="features-desc">
        <div class="feature-icon"><i class="fa-regular fa-clipboard-check"></i>
</div>
        <div class="feature-text"></div>
        <p>The Vaccine will be critical to ending the pandemic.No steps were skiped in the development 
            process, and safty was a stop priority.</p>
</div>
</div>
<div class="features-img">
   <img src="feature(1).png">
</div>
</div>
</section>
<div id="menuBtn">
    <image src="menu.jpg " id="menu" >
</div>
<!-- <div class="container">
        <div class="box">
        <button type="button" class="btn1">login</button>
        <button type="button" class="btn">Register</button>
        </div>
        <div class="box">
        <button type="button" class="btn1">login</button>
        <button type="button" class="btn">Register</button>
        </div>  -->
        
<script>
    var menuBtn = document.getElementById("menuBtn")
    var sideNav = document.getElementById("sideNav")
    var menu = document.getElementById("menu")

    sideNav.style.right = "-250px";
    
    menuBtn.onclick = function(){
        if(sideNav.style.right =="-250px"){
            sideNav.style.right ="0";
            menu.src = "closeb.png";
        }
        else{
            sideNav.style.right = "-250px";
            menu.src = "menu.jpg";
        }
    }

</script>
</body>
</html>