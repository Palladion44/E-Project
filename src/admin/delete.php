<?php 
include 'config.php';
$ID = $_GET['parent_id'];
$delquery = "DELETE FROM parents WHERE parent_id = '$ID' ";


if(mysqli_query($conn,$delquery)){

// header("location: index.php");
echo"dede";



} else{

    echo "error";


}


?>