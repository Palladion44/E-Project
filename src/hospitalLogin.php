<html lang="en">
<head>

    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true&libraries=places"></script>
    <script type="text/javascript" src="https://rawgit.com/Logicify/jquery-locationpicker-plugin/master/dist/locationpicker.jquery.js"></script>
    <script src="script.js"></script>
  
    <title>Hospitals form</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        .container{
            height:100%;
            width:100%;
            background-image: url(bc2.png);
            background-position: center;
            background-size: cover;
            position: absolute;
            display:flex;
            align-items:center;
            justify-content: center;

        
}


.containero{
    position:absolute;
    left:110%;
    bottom:5%;

}
.card{
    width: 350px;
    height: 500px;
    box-shadow: 0 0 40px 20px rgba(0,0,0,0.26);
    perspective: 1000px;
    border-radius: 100px;

}
.inner-box{
    position:relative;
    width: 100%;
    height: 100%;
    transform-style: preserve-3d;
    transition: transform 1s;
    border-radius: 100px;

}
.card-front, .card-back{
    position: absolute;
    width: 100%;
    height: 100%;
    background-position: center;
    background-size: cover;
    background: #002F5C;
        padding: 55px;
    box-sizing: border-box;
    backface-visibility: hidden;
    border-radius: 100px;
}
.card-back{
    transform: rotateY(180deg);
}
.card h2{
    font-weight: normal;
    font-size: 24px;
    text-align: center;
    margin-bottom: 20px;
}
.input-box{
    width:100%;
    background: transparent;
    border: 1px solid #fff;
    margin: 6px 0;
    height: 32px;
    border-radius: 20px;
    padding: 0 10px;
    box-sizing: border-box;
    outline: none;
    text-align: center;
    color: #fff;
}
::placeholder{
    color:#fff;
    font-size: 12px;
}
button{
    width: 100%;
    background: transparent;
    border: 1px solid #fff;
    margin: 35px 0 10px;
    height: 32px;
    font-size: 12px;
    border-radius:20px;
    padding: 0 20px;
    box-sizing: border-box;
    outline: none;
    color: #fff;
    cursor: pointer;
}
.submit-btn{
    position: relative;
}
/* .submit-btn::after{
    content:'\27a4';
    color: #333;
    line-height: 32px;
    font-size: 17px;
    height: 32px;
    width: 32px;
    border-radius: 50%;
    background: #fff;
    position: absolute;
    right: 30px;
    top: 30px;


} */
span{
    font-size: 13px;
    margin-left: 10px;
}
.card .btn{
    margin-top: 70px;
}
.card a{
    color: #fff;
    text-decoration: none;
    display: block;
    text-align: center;
    font-size: 13px;
    margin: 8px;

}

        
    </style>
</head>
<body>
<div class="container">
<div class="card">
<div class="inner-box" id="card">
<div class="card-front">
    <h2 style="color: white">Login</h2>
    <form>
           <input type="email" class="input-box" placeholder="Email Id"required>
            <input type="Password" class="input-box" placeholder="Enter Password"required>
            <br>
            <a href="">Forgot Password?</a>
            <input type="checkbox" ><span style="color: white"> Remember Me</span>


            <button type="Submit" class="submit-btn" onclick=""> Submit </button>

<button type="button" onclick="openRegister()" class="btn">I'm New Here </button>
</div>

<div class="card-back">
<h2 style="color: white">Register</h2>
    <form>
    <!-- <input type="text" class="input-box" placeholder="Your Name">
           <input type="email" class="input-box" placeholder="Email Id">
            <input type="Password" class="input-box" placeholder="Enter Password"> -->
        <input type="text"  id="location">

 


            <button type="Submit" class="submit-btn" onclick="kutta()" > Submit </button>
</form>
<script>

function kutta(){
let locvar = document.getElementById("location").value;
document.getElementById.innerHtml=
<div width="300px" height="300px" class="mapouter"><div class="gmap_canvas"><iframe width="300px" height="300px" id="gmap_canvas" src="https://maps.google.com/maps?q= <?php echo' <script> ${locvar}</script>';?>&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:300px;width:300px;}</style><a href="https://embedgooglemap.2yu.co">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:300px;}</style></div></div>

}
</script>
<button type="button" onclick="openLogin()" class="btn">I've an account</button>

      <div class="containero">


</div>
  
</div>
</div>
</div>
</div>
<script>
        var card = document.getElementById("card");
        function openRegister(){
            card.style.transform = "rotateY(-180deg)";
        }
        function openLogin(){
            card.style.transform = "rotateY(0deg)";
        }

</script>
</body>

</html>