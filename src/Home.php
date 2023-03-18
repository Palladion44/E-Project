<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="stylesheetH.css">
</head>
<body>
    <section id="banner">
        <img src="vaccinelogo.jpg" class="logo">
        <!-- <p>
            vaccine
        </p> -->
        <div class="banner-text">
            <h1> Vaccine Booking System</h1>
            <p>Getting Vaccinated is the best way to protect our child</p>
</section>
<div id="sideNav">
<nav>
    <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">PRODUTS</a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">LOGIN</a></li>
</ul>
</nav>
</div>
<!-- features -->
<section id="features">
    <div class="title-text">
        <p> Features</p>
        <h1>Choose Vaccine</h1>

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
            menu.src = "close2.png";
        }
        else{
            sideNav.style.right = "-250px";
            menu.src = "close2.png";
        }
    }

</script>
</body>
</html>