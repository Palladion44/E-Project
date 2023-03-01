<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="hero">
        <div class="from-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Login In</button>
            <button type="button" class="toggle-btn" onclick="register()">Register</button>
         </div>
        
        <from  id="Login" class="input-group">
            <input type="text" class="input-feild" placeholder="User Id"required>
            <input type="text" class="input-feild" placeholder="Enter Password"required>
            <br>
            <input type="checkbox" class="check-box"><span> Remember  Password</span>
            <button type="Submit" class="submit-btn"> Login </button>
         </from>
         <from   id="register" class="input-group">
            <input type="text" class="input-feild" placeholder="User Id"required>
            <input type="email" class="input-feild" placeholder="Email Id"required>
            <input type="text" class="input-feild" placeholder="Enter Password"required>
            <br>
            <input type="checkbox" class="check-box"><span> I agree to the teram sand conditions</span>
            <button type="Submit" class="submit-btn"> Register  </button>
         </from>
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
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }

    </script>
</body>
</html>