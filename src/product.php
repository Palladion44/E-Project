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
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  

   <!-- carousel min.css link 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" -->
    <!-- crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <!-- carousel theme.min.css link  -->
	<!-- <link rel="stylesheet" href="style.css">
    -->
</head>
<style>
  #banner1{
    background: url(Pr2.jpg);
    background-size: cover;
    background-position: center;
    height: 500px;
}
  .logo1{
    width: 170px;
    position:absolute;
    top:1%;
    left:10;
}
.banner-text  h1{
  padding: 10px;
  margin-top: 0px;
}
.banner-text p{
  padding-bottom:10px;

}

.title-text h1{
    font-size: 50px;
    padding: 20px;
    text-align: center;
    font-family: monospace;
}

.card:hover{

  box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}

</style>
<body>
<?php include("navbarx.php")?>
<section id="banner1">
        <img src="vaccinelogo.jpg" class="logo1">
        <div class="banner-text">
            <h1 >   All Vaccine</h1>
            <!-- <p>Vaccines are products that protect people against many diseases that can
               be very dangerous and even deadly.</p> -->
</div>
    </section>


    <div class="container">

   <h1 class="text-center animate__animated animate__backInLeft ">AVAILABLE VACCINE</h1>
    <div class="row py-5">


      <div class="col-md-4">

        <div data-aos="fade-right">

        <div class="card"  style="max-height: 500px;">
          <img src="./proimages/hapatits.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">>HAPATHSIS B(Hepb)</h5>
            <p class="card-text">Hepatitis B vaccines contain one of the proteins from the surface of
              the hepatitis B virus (hep B surface antigen, or HBsAg). This protein is made by
              inserting the genetic code into yeast cells, which removes any risk of viral DNA 
              getting into the final product. This process is called recombinant DNA technology</p>
           
          </div>
        </div>

      </div>
      </div>

      <!-- 2nd card -->
      <div class="col-md-4">

        <div data-aos="fade-up">
        <div class="card"  style="max-height: 500px;">
          <img src="./proimages/rotav.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">>Rotavirus (RV)</h5>
            <p class="card-text">Rotavirus vaccine is the best way to protect your child against rotavirus disease. Most children (about 9 out of 10)
              who get the vaccine will be protected from severe rotavirus disease</p>
           
          </div>
        </div>
      </div>

      </div>

      <!-- 3rd -->
      <div class="col-md-4" >

        <div data-aos="fade-down">
        <div class="card" >
          <img src="./proimages/diphtheria.jpg" class="card-img-top img-fluid w-100 " alt="..."  style="max-height: 200px;" >
          <div class="card-body">
            <h5 class="card-title">Diphtheria Vaccine</h5>
            <p class="card-text">The DTaP vaccine protects young children from diphtheria, tetanus, and whooping cough. 
              The DT vaccine protects young children from diphtheria and tetanus. 
              The Tdap vaccine protects preteens, teens, and adults from tetanus, diphtheria, 
              and whooping cough
          </div>
        </div>

</div>

      </div>

      <!-- 4 -->

      <div class="col-md-4 py-5"  >

        <div data-aos="fade-right">
        <div class="card" style="max-height: 500px;">
          <img src="./proimages/pnemo.jpg" class="card-img-top img-fluid w-100 " alt="..."  >
          <div class="card-body">
            <h5 class="card-title">Pneumcoccal Vaccine</h5>
            <p class="card-text">The pneumococcal vaccine protects against serious and potentially fatal pneumococcal
              infections. It's also known as the pneumonia vaccine.
          </div>
        </div>
        </div>




      </div>


      <!-- 5th -->
      <div class="col-md-4 py-5"  >
        <div data-aos="fade-down">
        <div class="card" style="max-height: 500px;">
          <img src="./proimages/infulenza.jpg" class="card-img-top img-fluid w-100 " alt="..." style="max-height: 200px;" >
          <div class="card-body">
            <h5 class="card-title">Influnza Vaccine</h5>
            <p class="card-text">Influenza vaccines are vaccines that protect against the four
              influenza viruses that research indicates will be most common during the upcoming 
              season. 
          </div>
        </div>
        </div>
      </div>

      <!-- 6th -->
      <div class="col-md-4 py-5"  >
        <div data-aos="fade-up">

        <div class="card" style="max-height: 500px;">
          <img src="./proimages/polio.jpg" class="card-img-top img-fluid w-100 " alt="..." style="max-height: 200px;" >
          <div class="card-body">
            <h5 class="card-title">Polio Vaccine</h5>
            <p class="card-text">CDC recommends that all children get polio vaccine to protect 
              against polio, or poliomyelitis, as part of the series of routine childhood vaccines. 
          </div>
        </div>
        </div>

      </div>

      <!-- 7 -->

      <div class="col-md-4 py-5"  >
        <div data-aos="fade-right">

        <div class="card" style="max-height: 500px;">
          <img src="./proimages/measle mumpus.jpg" class="card-img-top img-fluid w-100 " alt="..." style="max-height: 200px;" >
          <div class="card-body">
            <h5 class="card-title">Measles Vaccine</h5>
            <p class="card-text">The vaccine protects against three diseases: measles, mumps, and
              rubella. CDC recommends children get two doses of MMR vaccine, starting with the 
              first dose at 12 through 15 months of age, and the second dose at 4 through 6 years
               of age.Teens and adults should also be up to date on their MMR vaccination. 
          </div>
        </div>


      </div>
      </div>

      <!-- 8 -->
      
     
      <div class="col-md-4 py-5"  >
        <div data-aos="fade-up">
        <div class="card" style="max-height: 500px;">
          <img src="./proimages/varicella_vaccine.jpg" class="card-img-top img-fluid w-100 " alt="..." style="max-height: 200px;" >
          <div class="card-body">
            <h5 class="card-title">Varicella Vaccine</h5>
            <p class="card-text">Varicella vaccine, also known as chickenpox vaccine, is a vaccine that protects against chickenpox.[9] One dose of vaccine prevents 95% of moderate disease and 100% of severe disease.[10] Two doses of vaccine are more effective than one.[10] If given to those who are not immune within five days of exposure to chickenpox it prevents most 
          </div>
        </div>
      </div>
      </div>

      <!-- 9 -->
      
      <div class="col-md-4 py-5"  >
        <div data-aos="fade-down">

        <div class="card" style="max-height: 500px;">
          <img src="./proimages/ha.jpg" class="card-img-top img-fluid w-100 " alt="..." style="max-height: 200px;" >
          <div class="card-body">
            <h5 class="card-title">Hepatitis A Vaccine</h5>
            <p class="card-text">Hepatitis A vaccine can prevent hepatitis A.
              Hepatitis A is a serious liver disease. It is usually spread through close, 
              personal contact with an infected person or when a person unknowingly ingests the 
              virus from objects, food, or drinkpersonal contact with an infected person or when a person unknowingly ingests the 
              virus from objects, food, </p> 
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>









	<div  class="cards1">
		<div class="row gy-3 my-3">
	





      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
<!-- <link  src=https://www.livingstonhealthcare.org/images/childImmunizationMagnet.jpg > -->

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


 