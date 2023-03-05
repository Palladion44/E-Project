<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <link rel="stylesheet" href="style.css">
<style>
    body{
     background-image: url(bgL.jpg);
     background-size: cover;
     background-position: fixed;    
     width:100%;
     height:100vh;
     background-repeat: no-repeat;
     }
     #Login{
        margin-left: 45px;
     }
</style>
</head>
<body>
    <div class="hero">
        <div class="from-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Login In</button>
            <button type="button" class="toggle-btn" onclick="register()">Register</button>
         </div>
        
        <form method="post" action="parentLoginReg.php"  id="Login" class="input-group">
            <input type="text" class="input-feild" placeholder="User Id"required>
            <input type="password" class="input-feild" placeholder="Enter Password"required>
            <br>
            <input type="checkbox" class="check-box"><span> Remember Me</span>
            <button type="Submit" name="Parentlogin" class="submit-btn"> Login </button>
         </form>

         
         <form method="POST" action="parentLoginReg.php"   id="register" class="input-group">
            <input type="text" name="regparentname" class="input-feild" placeholder="UserName"required>
            <input type="email" name="regemail" class="input-feild" placeholder="Email Id"required>
            <input type="password" name="regpassword" class="input-feild" placeholder="Enter Password"required>
            <br>
            <input required type="checkbox" name="terms" class="check-box"><span> I agree to the teram sand conditions</span>
            <p id="userregistered"></p>
            <button type="Submit" id="submit" name="ParentRegister" class="submit-btn"> Register  </button>
         </form>
         </div>
    </div>
    <script>
        var x = document.getElementById("Login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "0px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
        
         
    </script>
</body>
</html>


<?php

include "config.php";


if(isset($_POST['ParentRegister'])){

$regparentname = $_POST['regparentname'];
$regemail= $_POST['regemail'];
$regpassword= sha1( $_POST['regpassword']);

$insert = "INSERT INTO parents(parentname , parentemail , parentpassword) 
VALUES 
('$regparentname' , '$regemail','$regpassword')";


if (mysqli_query($conn,$insert)) {
   
    echo '<script type="text/javascript">document.getElementById("userregistered").innerHTML="helllllll" ;</script>
    ';

} else 
{

    
    echo "sigup failed !";
}
var_dump(mysqli_query($conn,$insert));

}


session_start();
if (isset($_POST['Parentlogin'])) {

    $useremail = $_POST['email'];
    $password = $_POST['password'];

    $login = "SELECT * FROM USERDETAILS WHERE useremail = '$useremail' AND  userpassword = '$password' ";

    $data = mysqli_query($conn, $login);
    $row = mysqli_fetch_assoc($data);
    $username = $row['username'];




    if ($row == 0) {

        echo "Login Failed";

        echo '<script type="text/javascript"> window.location="login.php";</script>';

        
        
    }else{
   
        $_SESSION['user'] = $username;
        echo '<script type="text/javascript"> </script>';

}
}
?>