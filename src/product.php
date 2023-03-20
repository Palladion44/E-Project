<!DOCTYPE html>
<html lang="en">

<head>
  <title>product password_get_info </title>
   <!-- fontawesome cdn link
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> -->
  <!-- bootsrap css  link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
   <!-- carousel min.css link 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" -->
    <!-- crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <!-- carousel theme.min.css link  -->
	<!-- <link rel="stylesheet" href="style.css">
    -->
</head>
<style>
  #myCarousel{
    background: url(carasole.3.jpg);
    background-size: cover;
    background-position: center;
    height: 400px;
  }
  .logo{
    width: 170px;
    position:absolute;
    top:1%;
    left:10;
}
/* #myCarousel .carousel slide{
  width:100%;
  height:400px;
  */

.carousel-control-next{
  left:85%;
}
.carousel-control-prev{
 left:0;
}

</style>
<body>
  <div>
        <img src="vaccinelogo.jpg" class="logo">
</div>

  
<div width="100%" > 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target= "#carousel2.jpg"  data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="./proimages/carasole3.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="chicago.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="ny.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

	<div  class="container">
		<div class="row gy-3 my-3">
			<div class=" col-sm-6 col-md-4 col-lg-3">
			<div class="card" >
  <img src="./proimages/hapatits.jpg" class="card-img-top" alt="image">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-3">
<div class="card" >
  <img src="./proimages/diptanus.jpg" class="card-img-top" alt="image">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-3">
<div class="card" >
  <img src="./proimages/Tetanus vaccine.jpg" class="card-img-top" alt="image">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-3">
<div class="card" >
  <img src="./proimages/diptanus.jpg" class="card-img-top" alt="image">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-3">
<div class="card" >
  <img src="./proimages/diptanus.jpg" class="card-img-top" alt="image">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-3">
<div class="card" >
  <img src="./proimages/diptanus.jpg" class="card-img-top" alt="image">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-3">
<div class="card" >
  <img src="./proimages/diptanus.jpg" class="card-img-top" alt="image">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-3">
<div class="card" >
  <img src="./proimages/diptanus.jpg" class="card-img-top" alt="image">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-3">
<div class="card" >
  <img src="./proimages/diptanus.jpg" class="card-img-top" alt="image">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-3">
<div class="card" >
  <img src="./proimages/diptanus.jpg" class="card-img-bottom" alt="image">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
</div>

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
<!-- <?php
include "./footer.php";
?> -->

 