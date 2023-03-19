<?php
include "config.php";
session_start(); 
?>
<?php if(!isset($_SESSION['hospitalid'])){
    echo "<script>window.location.href = 'hospitalLogin.php'</script>";
}
?>
<html>
    <head>
        <?php       
include "header.php";
?>

    </head>

<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php echo $_SESSION['hospitaluser'] ?> Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="updatevacc.php">Update Available Vaccines</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Hospitalprof.php">Appointments</a>
        </li>

     
      <li class="d-flex nav-item">
          <a class="nav-link active btn-primary" id="logout" aria-current="page" href="updatevacc.php?logout=true">Logout</a>
        </li>
    </div>
  </div>
</nav>





<div class="container containero">
<h1>Set and Update Available Vaccines</h1>
<form action="updatevacc.php" method="POST">
<div class="form-check">
<input type="hidden" name="Hepatitis_B_HepB" value=0><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
  <label class="form-check-label" for="flexCheckDefault">
  Hepatitis B (HepB)
  </label>
</div>
<div class="form-check">
<input type="hidden" name="RotaVirus_RV" value=0><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
  <label class="form-check-label" for="flexCheckDefault">
    RotaVirus (Rv)
  </label>
</div>
<div class="form-check">
<input type="hidden" name="Diphteria_Tetanus_Pertussis_DTaP" value=0><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
  <label class="form-check-label" for="flexCheckDefault">
  Diphteria Tetanus Pertussi (DTaP)
  </label>
</div>
<div class="form-check">
<input type="hidden" name="H_Influenzae_type_B_Hib" value=0><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">

  <label class="form-check-label" for="flexCheckDefault">
  H Influenzae type B (Hib)
  </label>
</div>
<div class="form-check">
<input type="hidden" name="Pneumococcal_PCV" value=0><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">

  <label class="form-check-label" for="flexCheckDefault">
  Pneumococcal (PCV)
  </label>
</div>
<div class="form-check">
<input type="hidden" name="Inactivated_Poliovirus_IPV" value=0><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">

  <label class="form-check-label" for="flexCheckDefault">
  Inactivated Poliovirus (IPV)
  </label>
</div>
<div class="form-check">
<input type="hidden" name="Influenza" value=0><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">

  <label class="form-check-label" for="flexCheckDefault">
   Influenza
  </label>
</div>
<div class="form-check">
<input type="hidden" name="Measels_MumpsRubella_MMR" value=0><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">

  <label class="form-check-label" for="flexCheckDefault">
    Measles, Mumps, Rubella (MMR)
  </label>
</div>
<div class="form-check">
<input type="hidden" name="Varicella_VAR" value=0><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">

  <label class="form-check-label" for="flexCheckDefault">
    Varicella (VAR)
  </label>
</div>
<div class="form-check">
<input type="hidden" name="Hepatitius_A_HepA" value=0><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">

  <label class="form-check-label" for="flexCheckDefault">
    Hepatitus A (HepA)
  </label>
</div>
<button name="updaterecord" type="submit" id="submitbutt" class="btn btn-primary">Set Vaccination Records</button>

</form>
</div>
</body>
<style>
  .containero{
   margin: 50px;
    align-items: center;
    display: inline-block;
    justify-content: center;
    outline: 1px solid grey;
    width: fit-content;
    border-radius: 25px;
  }
  #submitbutt{
    margin-left: 50%;
}
#logout:hover{
color: red;
}
</style>
</html>

<?php
if(isset($_POST['updaterecord']))
{
  $hospname =$_SESSION['hospitaluser'];
$hepat=$_POST['Hepatitis_B_HepB'];
$penuma= $_POST['Pneumococcal_PCV'];
$polio=$_POST['Inactivated_Poliovirus_IPV'];
$hib=$_POST['H_Influenzae_type_B_Hib'];
$dip=$_POST['Diphteria_Tetanus_Pertussis_DTaP'];
$infl=$_POST['Influenza'];
$measl=$_POST['Measels_MumpsRubella_MMR'];
$vari=$_POST['Varicella_VAR'];
$hepa=$_POST['Hepatitius_A_HepA'];
$rota=$_POST['RotaVirus_RV'];
// echo($hepat.
// $rota.
// $dip.
// $hib.
// $penuma.
// $polio.
// $infl.
// $measl.
// $vari.
// $hepa.
// $_SESSION['hospitaluser']
// );
// echo($_SESSION['hospitaluser'].$_SESSION['hospitalid']);
$thehid =$_SESSION['hospitalid'];
   $selecthosp= "UPDATE hospitals SET Hepatitis_B_HepB = '$hepat', RotaVirus_RV = '$rota', Diphteria_Tetanus_Pertussis_DTaP = '$dip',
   H_Influenzae_type_B_Hib = '$hib', Pneumococcal_PCV = '$penuma', Inactivated_Poliovirus_IPV = '$polio', 
   Measels_MumpsRubella_MMR = '$measl', Varicella_VAR = '$vari', Hepatitius_A_HepA = '$hepa', Influenza = '$infl'
   WHERE hospitals.hospital_id = $thehid;";
  if(mysqli_query($conn,$selecthosp)){
    echo'Records have been updated';
  }

}
if (isset($_GET["logout"])) {
  session_unset();
  session_destroy();

  header("location:hospitalLogin.php");
  echo '<script>window.location.href = "hospitalLogin.php"</script>'; 

  
}

?>