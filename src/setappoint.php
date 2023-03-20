<?php
include("config.php");
session_start();

?>

<?php
if(!isset($_SESSION['user'])){
   
    echo '<script>
    if(confirm("You must be logged in to Register")) {
       window.location.href="Home.php"
    }
    </script>';
}
else{?>







<?php 
if(isset($_GET['childid'])){
$chid = $_GET['childid'];
    $qwerty="SELECT * FROM `children` WHERE `child_id` = '$chid' ;";
    $resc = mysqli_query($conn,$qwerty);
    $row = mysqli_fetch_assoc($resc);
                                            
    $now = new DateTime();
    $dob = new DateTime($row['Dateofbirth']);
    
    $diff = $now->diff($dob);
     
                                            

 echo   $diff->y ."/" .$diff->m ."/" .$diff->d ;
}
if($diff->y == 0 && $diff->m < 1){
    $selectvacc ="SELECT * FROM `vaccinations` WHERE `Birth` = '1';";
}
elseif($diff->y == 0 && $diff->m <= 2  && $diff->m < 4){
    $selectvacc ="SELECT * FROM `vaccinations` WHERE `2months` = '1';";

}
elseif($diff->y == 0 && $diff->m <= 4  && $diff->m < 6){
    $selectvacc ="SELECT * FROM `vaccinations` WHERE `4months` = '1';";

}
elseif($diff->y == 0 && $diff->m <= 6  && $diff->m < 7){
    $selectvacc ="SELECT * FROM `vaccinations` WHERE `6months` = '1';";
}

elseif($diff->y == 1 && $diff->m < 2 ){
    $selectvacc ="SELECT * FROM `vaccinations` WHERE `12months` = '1';";

}
elseif($diff->y == 1 && $diff->m < 5 ){
    $selectvacc ="SELECT * FROM `vaccinations` WHERE `15months` = '1';";

}
elseif($diff->y == 1 && $diff->m < 7 ){
    $selectvacc ="SELECT * FROM `vaccinations` WHERE `18months` = '1';";

}
elseif($diff->y == 2 && $diff->m < 11 ){
    $selectvacc ="SELECT * FROM `vaccinations` WHERE `24months` = '1';";

}
elseif($diff->y <= 5 && $diff->m < 1 ){
    $selectvacc ="SELECT * FROM `vaccinations` WHERE `4_5years` = '1';";

}
$resv = mysqli_query($conn,$selectvacc);

 ?>







<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register</title>
        <?php include('header.php')?>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <div id="vaci">
        <div class="container">
            <form action="setappoint.php" method="POST">
            <select name='vaccinationname'>

                <?php
              while($rowver = mysqli_fetch_assoc($resv)){    
?>
                <option value="<?php echo $rowver['vaccinationname']?>"><?php echo $rowver['vaccinationname'] ?></option>



<?php }?>
</select>
<button type="submit" onclick="" name="setvacc"> confirm vaccine  </button >
            </form>

        </div>
        </div>
        <?php if(isset($_POST['setvacc'])){
    $vaccname = $_POST['vaccinationname'];
    echo "<script> document.getElementById('vaci').innerHTML=' Vaccine: $vaccname'; </script>";
    ?>
        <div class="container">
        <form action="setappoint.php" method="POST">
            <select name='vaccinationname'>

                <?php
              while($rowver = mysqli_fetch_assoc($resv)){    
?>
                <option value="<?php echo $rowver['vaccinationname']?>"><?php echo $rowver['vaccinationname'] ?></option>



<?php }?>
</select>
<button type="submit" onclick="" name="setvacc"> confirm vaccine  </button >
            </form>
        </div>
<?php } ?>

    </body>
</html>




<?php }?>
