<?php
include "config.php";
session_start();
?>
<?php if(isset($_SESSION['hospitaluser'])){
 
?>
<html>
    <head>
        <?php       
include "header.php";
?>

    </head>

<body>
<h1>Update Available Vaccines</h1>
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
<button name="updaterecord" type="submit" class="btn btn-primary">Submit</button>

</form>
</body>
</html>
<?php }   ?>
<?php

if(isset($_POST['updaterecord']))
{
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
   

}
?>