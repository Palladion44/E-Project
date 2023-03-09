<?php 
include 'config.php';
$ID = $_GET['id'];
$delquery = "DELETE FROM parents WHERE parent_id = '$ID' ";
echo $ID;

if(mysqli_query($conn,$delquery)){

header("location: index.php");
echo"dede";



} else{

    echo "error";



}
$Hid = $_GET['hospitalid'];
$delquery2 = "DELETE FROM hospitals WHERE hospital_id = '$Hid' ";


if(mysqli_query($conn,$delquery2)){

header("location: hospitalTable.php");
echo"dede";



} else{

    echo "error";


}





?>