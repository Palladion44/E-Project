<?php



$dateOfBirth = '15-03-1987';
 

$dob = new DateTime($dateOfBirth);
 

$now = new DateTime();
 

$diff = $now->diff($dob);
 

echo "Your current age is ".$diff->y." years.
 ";
 

echo "Your current age is ".$diff->y." years ".$diff->m." months ".$diff->d." days.";
?>

?>