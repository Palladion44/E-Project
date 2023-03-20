
<?php
include("config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include('header.php') ?>
    
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

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
    margin-bottom: 10px;
    font-weight: 100;
    color:#009688;
}
.features-desc{
    display: flex;
    align-items: center;
    margin-bottom: 40px;
}
.feature-icon .fa-solid{
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
    text-align: initial;
}
@media screen and (max-weight: 770px){
    .title-text h1{
    font-size: 35px;
}
.features{
    flex-basis: 100%;
}
.features-img{
    flex-basis: 100%;
}
.features-img img{
    width:100%;

}
}

.inactiveLink {
    pointer-events: none;
    cursor: default;
}

/* register box */

    .container{
        width: 100%;
        padding:60px;
        margin: 100%;
        background:#0085A6;
        margin:100px auto;
        display:flex;
        justify-content:center;
    }
    .box1{
        width:400px;
        height:400px;
        background:url(userimg.jpg);
        margin:0px 40px;
        transition:1s;
    }
    .box2{
        width:400px;
        height:400px;
        background: url(hos3.jpg);
        margin:0px 40px;
        transition:1s;
    }

    .box1:hover{
        transform:scale(1.3);

    }
    .box2:hover{
        transform:scale(1.3);

    }
    .btn1{
     width: 200px;
    margin: 200px ;
    padding: 19px;
    position: absolute;
    border-radius: 10px;
    cursor: pointer;
    font-size:22px;
    align-items:justify content;
    display: inline;
    }
    @media screen and (max-width:770px){
        .container{
            flex-basis: 100%;
            margin-bottom: 30px;
        }
        .box1{
            flex-basis: 100%;
            margin-bottom: 30px;
        }
        .box2{
            flex-basis: 100%;
            margin-bottom: 30px;
        }
    }
    /* Footer */
    #footer{
        padding: 100px 0 20px;
        background:#efefef;
        position:relative;
    }
    .footer-row{
        width: 80%;
        margin:0 auto;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    .footer-left,.footer-right{
        flex-basis: 45%;
        padding: 10px;
        margin: 20px;
    }
    .footer-right{
        text-align:center;
    }
    .footer-row h1{
        margin: 10px 0;
    }
    .footer-row p{
        line-height: 35px;
    }
    .footer-left .fab,.footer-right .fa{
        font-size: 10px;
        color: #009688;
        margin: 10px;
    }
    .footer img{
        max-width: 200px;
        opacity: 0.1;
        position: absolute;
        left: 50%;
        top: 35%;
        transfrom: translate(-50%,-50%);
    }
    .social-links{
        text-align:center;
    }
    .social-links .fab{
        height: 40px;
        width: 40px;
        font-size: 20px;
        line-height: 40px;
        border: 1px solid #009688;
        margin:40px 5px 0;
        color: #009688;
        cursor: pointer;
        transition: .5s;
    }
    .social-links .fab:hover{
        background: #009688;
        color: #fff;
        transform: translateY(-7px);
    }
    .social-links p{
        font-size: 12px;
        margin: 30px;
    }
    @media screen and (max-width:770px){
        .footer-left,.footer-right{
            flex-basis: 100%;
            font-size: 14px;
        }
        .footer-img{
            top: 25%;
        }
    }










  


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
        <div class="feature-icon">
<<<<<<< HEAD
        <i class="fa-solid fa-2xl fa-clipboard-check"></i>
=======
        <i class="fa-solid fa-clipboard-check"></i>
>>>>>>> 6fcb90de8c6e9ec5807bd4dbf32002ba52f83c64
</div>
        <div class="feature-text">
        <p>The Vaccine will be critical to ending the pandemic.No steps were skiped in the development 
            process, and safty was a stop priority.</p>
</div>
</div>
<h1> TRIED AND TESTED</h1>
        <div class="features-desc">
        <div class="feature-icon">
        <i class="fa-solid fa-2xl fa-magnifying-glass"></i>
</div>
        <div class="feature-text">
        <p>The Vaccine will be critical to ending the pandemic.No steps were skiped in the development 
            process, and safty was a stop priority.</p>
</div>
</div>
<h1>HEGHLY EFFECTIVE </h1>
        <div class="features-desc">
        <div class="feature-icon">
        <i class="fa-solid fa-2xl fa-hundred-points"></i>
</div>
        <div class="feature-text">
        <p>The Vaccine will be critical to ending the pandemic.No steps were skiped in the development 
            process, and safty was a stop priority.</p>
</div>
</div>
</div>
</div>
</div>

<!-- <div class="features-img">
   <img src="feature(1).png">
</div>
</div> -->
</section>
<div id="menuBtn">
    <image src="menu.jpg " id="menu" >
</div>

<!-- register -->
<section id="rigister">
    <div class="title-text">
        <p> REGISTER/LOGIN</P>
</div>
<div class="container">
        <div class="box1">
        <button type="button" class="btn1">Register/login</button>
        </div>
        <div class="box2">
        <button type="button" class="btn1">Register/login</button>
        </div>
</div> 
</section>

<!-- footer -->
<section id="footer">
<img src="flogo2.jpg" class="footer-img">
    <div class="title-text">
        <p>Contact</p>
        <h1>Visit website today</h1>
</div>
<div class="footer-row">
    <div class="footer-left">
        <h1> opening hours</h1>
        <p> vaccination helps protect you by creating an antibody response without you having 
            to experience potentially severe illness or post-COVID conditions. Getting sick with COVID-19
             can cause severeillness or death, even in children, and we can't 
             reliably predict who will have mild or severe illness.
             
    </div>
    <div class="footer-right">
        <h1> Hospitals</h1>
        <p>Safi</p>
        <p>Imam Clinic</p>
        <p> Haleem</p>
        <p> Ziadudin</p>
        <p class="email-id"> hospital123@gmail.com<i class="fa fa-paper-plane"></i></p>
        <h4>+92 - 0120987276<i class="fa fa-phone"></i></h4>
    </div>
</div>
<div class="social-links">
            <i class="fab fa-facebook-f"></i> 
			 <i class="fab fa-instagram"></i>
			<i class="fab fa-twitter"></i>
			<i class="fab fa-youtube"></i>
            <p>
                Follow page
            </p>
</div>
</section>



        
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