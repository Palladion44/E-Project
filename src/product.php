<?php
include "./navbar1.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>product password_get_info </title>
   <!-- fontawesome cdn link
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> -->
  <!-- bootsrap css  link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
.carousel-inner,#carouselExampleControls{
  width:100%;
  height:400px;
 
}
.carousel-control-next{
  left:85%;
}
.carousel-control-prev{
 left:0;
}

</style>
<body>
  
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner" >
    <div  class="carousel-item active">
      <img src="./proimages/carousel2 (1).jpg"   id="setsize"  class="d-block w-100 img-fluid" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./proimages/carousel2 (2).jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://wallpaperaccess.com/full/1282798.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
	<div class="container">
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
</body>

</html>
<!-- <?php
include "./footer.php";
?> -->

 