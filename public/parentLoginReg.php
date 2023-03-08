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
        <h3 id="userregistered"></h3>

        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Login In</button>
            <button type="button" class="toggle-btn" onclick="register()">Register</button>
         </div>
        
        <form method="post" action="parentLoginReg.php"  id="Login" class="input-group">
            <input type="text" class="input-feild" name="username" placeholder="Enter UserName"required>
            <input type="password" class="input-feild" name="password" placeholder="Enter Password"required>
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
session_start();

include "config.php";


if(isset($_POST['ParentRegister'])){

$regparentname = $_POST['regparentname'];
$regemail= $_POST['regemail'];
$regpassword= sha1( $_POST['regpassword']);

$insert = "INSERT INTO parents(parentname , parentemail , parentpassword) 
VALUES 
('$regparentname' , '$regemail','$regpassword')";


if (mysqli_query($conn,$insert)) {
    $_SESSION["Pname"]= $regparentname;
   
    echo '<script type="text/javascript"> document.getElementById("userregistered").innerHtml="acha"</script>';
    

} 
else {

    echo "<script>window.location.href = 'index.php';</script>"; 


}
}



if (isset($_POST['Parentlogin'])) {

    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    $login = "SELECT * FROM PARENTS WHERE parentname = '$username' AND  parentpassword = '$password' ";

    $data = mysqli_query($conn, $login);
    $row = mysqli_fetch_assoc($data);
    // $userID = $row['UserID']
    $userName = $row['parentname'];

    if(isset($_POST['rememberMe'])){
        setcookie('username',$_POST['username'],time()+4000);
        setcookie('userpassword',$_POST['password'],time()+4000);
        echo "cookies are set";
    }
    else{
        echo "cookies are not set";
    }
    
    if(isset($_POST['forget'])){
        setcookie('useremail',$_POST['email'],time()-4000);
        setcookie('userpassword',$_POST['password'],time()-4000);
    }


    if ($row == 0) {

        echo "Login Failed";

        // echo "<script>window.location.href = 'loginform.php';</script>";
    } else {
        $_SESSION['user'] = $userName;


        echo "<script>window.location.href = 'index.php';</script>";
    }
}
