<?php
include("config.php")
?>
<body>
    

<?php
include("navbarx.php");
?>
</body>
<?php
if(!isset($_SESSION['user'])){
   
    echo '<script>
    if(confirm("You must be logged in to Register")) {
       window.location.href="Home.php"
    }
    </script>';
}
else{
?>













<?php }?>