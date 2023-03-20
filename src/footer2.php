<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .title-text{
    text-align:center;
    padding-bottom: 70px;
}
.title-text p{
    margin: auto;
    font-size: 40px;
    color:#104961 ;
    font-weight: bold;
    position: relative;
    z-index: 1;
    display: inline-block;
}
.title-text p::after{
    content: '';
    width: 50px;
    height: 35px;
    background: linear-gradient(#195780,#33AEFF);
    position: absolute;
    top:-20px;
    left: 0;
    z-index: -1;
    transform: rotate(10deg);
    border-top-left-radius: 35px;
    border-bottom-right-radius: 35px;
}
.title-text h1{
    font-size: 50px;
    padding: 30px;
}
        #footer{
        padding: 10px 0 20px;
        background:#efefef;
        position:relative;
    }
    .footer-row{
        width: 80%;
        margin:0 auto;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    .footer-left,.footer-right{
        flex-basis: 45%;
        padding: 10px;
        margin: 20px;
    }
    .footer-right{
        text-align:center;
    }
    .footer-row h1{
        margin: 10px 0;
    }
    .footer-row p{
        line-height: 35px;
    }
    .footer-left .fab,.footer-right .fa{
        font-size: 10px;
        color: #009688;
        margin: 10px;
    }
    .footer img{
        max-width: 200px;
        opacity: 0.1;
        position: absolute;
        left: 50%;
        top: 35%;
        transform: translate(-50%,-50%);
    }
    .social-links{
        text-align:center;
    }
    .social-links .fab{
        height: 40px;
        width: 40px;
        font-size: 20px;
        line-height: 40px;
        border: 1px solid #009688;
        margin:40px 5px 0;
        color: #009688;
        cursor: pointer;
        transition: .5s;
    }
    .social-links .fab:hover{
        background: #009688;
        color: #fff;
        transform: translateY(-7px);
    }
    .social-links p{
        font-size: 12px;
        margin: 30px;
    }
    @media screen and (max-width:770px){
        .footer-left,.footer-right{
            flex-basis: 100%;
            font-size: 14px;
        }
        .footer-img{
            top: 25%;
        }
    }

    </style>
</head>
<body>
    <!-- footer -->
<section id="footer">
<!-- <img src="flogo2.jpg" class="footer-img"> -->
    <div class="title-text">
        <p>Contact</p>
        <h1>Visit website today</h1>
</div>
<div class="footer-row">
    <div class="footer-left">
        <h1> </h1>
        <p> vaccination helps protect you by creating an antibody response without you having 
            to experience potentially severe illness or post-COVID conditions. Getting sick with COVID-19
             can cause severeillness or death, even in children, and we can't 
             reliably predict who will have mild or severe illness.
             
    </div>
    <div class="footer-right">
        <h1> Hospitals</h1>
        <h2>Safi</h2>
        <h2>Imam Clinic</h2>
        <h2> Haleem</h2>
        <h2> Ziadudin</h2>
        <h2 class="email-id"> hospital123@gmail.com<i class="fa fa-paper-plane"></i></h2>
        <h2>+92 - 0120987276<i class="fa fa-phone"></i></h2>
    </div>
</div>
<div class="social-links">
            <i class="fab fa-facebook-f"></i> 
			 <i class="fab fa-instagram"></i>
			<i class="fab fa-twitter"></i>
			<i class="fab fa-youtube"></i>
            <p>
                Follow page
            </p>
</div>
</section>

</body>
</html>