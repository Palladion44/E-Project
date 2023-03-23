<!-- <?php
        include("config.php");
        session_start();
        ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include('header.php') ?>

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link rel="stylesheet" href="stylesheetH.css"> -->
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Kanit', sans-serif;
            /* font-family: 'Popines', sans-serif; */
        }

        #banner {
            background: url(bgH.jpg);
            background-size: cover;
            background-position: center;
            height: 500px;
        }

        .logo {
            width: 170px;
            position: absolute;
            top: 1%;
            left: 10;
        }

        .banner-text {
            text-align: center;
            color: #104961;
            padding-top: 200px;
        }

        .banner-text h1 {
            font-size: 60px;
        }

        .banner-text p {
            font-size: 50px;
            font-style: italic;
            padding: 80px;
        }

        #sideNav {
            width: 250px;
            height: 100vh;
            position: fixed;
            right: -250px;
            top: 0;
            background: #104961;
            z-index: 2;
            transition: 0.5s;
        }

        nav ul li {
            list-style: none;
            margin: 50px 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: azure;
        }

        #menuBtn {
            width: 50px;
            height: 50px;
            background: #104961;
            text-align: center;
            position: fixed;
            right: 30px;
            top: 20px;
            border-radius: 3px;
            z-index: 3;
            cursor: pointer;
        }

        #menuBtn img {
            width: 20px;
            margin-top: 15px;
        }

        @media screen and (max-weight: 770px) {
            .banner-text h1 {
                font-size: 60px;
            }
        }

        /* features */
        #features {
            width: 100%;
            padding: 70px 0;
        }

        .title-text {
            text-align: center;
            padding-bottom: 70px;
        }

        .title-text p {
            margin: auto;
            font-size: 40px;
            color: #104961;
            font-weight: bold;
            position: relative;
            z-index: 1;
            display: inline-block;
        }

        .title-text p::after {
            content: '';
            width: 50px;
            height: 35px;
            background: linear-gradient(#195780, #33AEFF);
            position: absolute;
            top: -20px;
            left: 0;
            z-index: -1;
            transform: rotate(10deg);
            border-top-left-radius: 35px;
            border-bottom-right-radius: 35px;
        }

        .title-text h1 {
            font-size: 50px;
            padding: 30px;
        }

        .features-box {
            /* display: flex; */
            width: 80%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            text-align: center;
        }

        .features {
            flex-basis: 50%;
        }

        /* .feartures-img img {
            flex-basis: 30%;
            margin: auto;
        }

        .feartures-img img {
            width: 30%;
            border-radius: 10px;
        } */

        .features h1 {
            text-align: left;
            margin-bottom: 10px;
            font-weight: 100;
            color: #009688;
        }

        .features-desc {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
        }

        .feature-icon .fa-solid {
            width: 50px;
            height: 50px;
            font-size: 30px;
            line-height: 50px;
            border-radius: 8px;
            color: #009688;
            border: 1px solid #009688;
        }

        .feature-text {
            padding: 0 20px;
            text-align: initial;
        }

        @media screen and (max-weight: 770px) {
            .title-text h1 {
                font-size: 35px;
            }

            .features {
                flex-basis: 100%;
            }

            /* .features-img {
                flex-basis: 100%;
            } */

            /* .features-img img {
                width: 100%;

            } */
        }

        .inactiveLink {
            pointer-events: none;
            cursor: default;
        }

        /* register box */

        .container {
            width: 100%;
            padding: 60px;
            margin: 100%;
            background: #0085A6;
            margin: 100px auto;
            display: flex;
            justify-content: center;
        }

        .box1 {
            width: 400px;
            height: 400px;
            background: url(userimg.jpg);
            margin: 0px 40px;
            transition: 1s;
        }

        .box2 {
            width: 400px;
            height: 400px;
            background: url(hos3.jpg);
            margin: 0px 40px;
            transition: 1s;
        }

        .box1:hover {
            transform: scale(1.3);

        }

        .box2:hover {
            transform: scale(1.3);

        }

        .btn1 {
            width: 200px;
            margin: 200px;
            padding: 19px;
            position: absolute;
            border-radius: 10px;
            cursor: pointer;
            font-size: 22px;
            align-items: justify content;
            display: inline;
        }

        @media screen and (max-width:770px) {
            .container {
                flex-basis: 100%;
                margin-bottom: 30px;
            }

            .box1 {
                flex-basis: 100%;
                margin-bottom: 30px;
            }

            .box2 {
                flex-basis: 100%;
                margin-bottom: 30px;
            }
        }

        /* Footer */
        #footer {
            padding: 100px 0 20px;
            background: #efefef;
            position: relative;
        }

        .footer-row {
            width: 80%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .footer-left,
        .footer-right {
            flex-basis: 45%;
            padding: 10px;
            margin: 20px;
        }

        .footer-right {
            text-align: center;
        }

        .footer-row h1 {
            margin: 10px 0;
        }

        .footer-row p {
            line-height: 35px;
        }

        .footer-left .fab,
        .footer-right .fa {
            font-size: 10px;
            color: #009688;
            margin: 10px;
        }

        .footer img {
            max-width: 200px;
            opacity: 0.1;
            position: absolute;
            left: 50%;
            top: 35%;
            transform: translate(-50%, -50%);
        }

        .social-links {
            text-align: center;
        }

        .social-links .fab {
            height: 40px;
            width: 40px;
            font-size: 20px;
            line-height: 40px;
            border: 1px solid #009688;
            margin: 40px 5px 0;
            color: #009688;
            cursor: pointer;
            transition: .5s;
        }

        .fab:hover {
            background: #009688;
            color: #fff;
            transform: translateY(-7px);
        }

        .social-links p {
            font-size: 12px;
            margin: 30px;
        }

        @media screen and (max-width:770px) {

            .footer-left,
            .footer-right {
                flex-basis: 100%;
                font-size: 14px;
            }

            .footer-img {
                top: 25%;
            }
        }
        /* .feature-img{
            height: 250px !important;
            width: 250px  !important;
        } */
    </style>
</head>

<body>

    <section id="banner">
        <img src="vaccinelogo.jpg" class="logo">
        <div class="banner-text">
            <h1 class="testero"> Vaccine Booking System</h1>
            <p>Getting Vaccinated is the best way to protect our child</p>
    </section>
    <?php include('navbarx.php');
    error_reporting(E_ERROR);
    ?>
    <!-- features -->
    <div class="title-text">
        <p> Features</p>
        <h1>SAFE AND EFFECTIVE</h1>
    </div>
    <div class="row container">

        <div class="col col-lg-8">
            <!-- <div class="features-box"> -->
                <div class="features ">
                    <h1> SAFTY FIRST</h1>
                    <div class="features-desc">
                        <div class="feature-icon">

                            <i class="fa-solid fa-2xl fa-clipboard-check"></i>

                        </div>
                        <div class="feature-text">
                            <p>The Vaccine will be critical to ending the pandemic.No steps were skiped in the development
                                process, and safty was a stop priority.</p>
                        </div>
                    </div>
                    <h1> TRIED AND TESTED</h1>
                    <div class="features-desc">
                        <div class="feature-icon">
                            <i class="fa-solid fa-2xl fa-magnifying-glass"></i>
                        </div>
                        <div class="feature-text">
                            <p>The Vaccine will be critical to ending the pandemic.No steps were skiped in the development
                                process, and safty was a stop priority.</p>
                        </div>
                    </div>
                    <h1>HEGHLY EFFECTIVE </h1>
                    <div class="features-desc">
                        <div class="feature-icon">

                            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="200" height="200" viewBox="0 0 1080 1080" xml:space="preserve">
                                <desc>Created with Fabric.js 5.2.4</desc>
                                <defs>
                                </defs>
                                <rect x="0" y="0" width="70%" height="70%" fill="transparent"></rect>
                                <g transform="matrix(1 0 0 1 540 540)" id="5c16933c-b8e0-4b10-9389-de0e7751c072">
                                    <rect style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; visibility: hidden;" vector-effect="non-scaling-stroke" x="-540" y="-540" rx="0" ry="0" width="1080" height="1080" />
                                </g>
                                <g transform="matrix(1 0 0 1 540 540)" id="b9897054-1bbd-45a6-ac87-8f71c8510c3b">
                                </g>
                                <g transform="matrix(1 0 0 1 540 540)">
                                    <g style="" vector-effect="non-scaling-stroke">
                                        <g transform="matrix(0.13 0 0 -0.13 -93.77 -39.82)">
                                            <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,150,136); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-697.48, -1529.82)" d="M 780 2055 C 701 2026 495 1929 479 1914 C 450 1887 437 1835 450 1796 C 475 1720 541 1695 628 1729 C 665 1744 680 1746 680 1737 C 680 1731 660 1587 635 1417 C 611 1248 593 1096 597 1080 C 600 1063 618 1036 638 1019 C 669 992 679 988 717 993 C 760 998 801 1025 821 1062 C 832 1082 950 1901 950 1957 C 950 2002 930 2034 890 2055 C 855 2073 827 2073 780 2055 z" stroke-linecap="round" />
                                        </g>
                                        <g transform="matrix(0.13 0 0 -0.13 -9.66 -47.68)">
                                            <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,150,136); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-1328.32, -1588.75)" d="M 1253 2051 C 1152 2017 1080 1936 1061 1836 C 1043 1738 1010 1465 1010 1409 C 1010 1322 1035 1263 1099 1200 C 1217 1083 1382 1079 1505 1192 C 1584 1264 1595 1300 1635 1641 C 1649 1750 1650 1789 1640 1833 C 1604 2008 1423 2110 1253 2051 z M 1390 1810 C 1415 1785 1415 1793 1385 1571 C 1359 1379 1348 1350 1307 1350 C 1272 1350 1250 1379 1250 1424 C 1250 1447 1261 1541 1274 1635 C 1293 1766 1302 1807 1316 1817 C 1341 1836 1367 1833 1390 1810 z" stroke-linecap="round" />
                                        </g>
                                        <g transform="matrix(0.13 0 0 -0.13 84.16 -51.82)">
                                            <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,150,136); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-2031.94, -1619.76)" d="M 1953 2051 C 1860 2019 1784 1940 1760 1850 C 1744 1791 1718 1488 1724 1436 C 1737 1324 1810 1230 1916 1190 C 2090 1125 2283 1239 2314 1425 C 2331 1525 2346 1774 2339 1820 C 2310 2002 2127 2112 1953 2051 z M 2082 1813 C 2094 1802 2100 1783 2100 1751 C 2100 1701 2082 1487 2074 1453 C 2065 1407 1992 1398 1970 1440 C 1963 1453 1964 1509 1974 1627 C 1988 1777 1991 1797 2011 1813 C 2038 1834 2058 1835 2082 1813 z" stroke-linecap="round" />
                                        </g>
                                        <g transform="matrix(0.13 0 0 -0.13 0 47.96)">
                                            <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,150,136); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-1400.76, -871.47)" d="M 1385 991 C 940 926 558 870 538 866 C 477 855 430 783 444 725 C 454 684 501 640 540 634 C 580 628 2249 864 2294 882 C 2330 896 2360 945 2360 988 C 2360 1060 2307 1111 2233 1109 C 2212 1108 1831 1055 1385 991 z" stroke-linecap="round" />
                                        </g>
                                        <g transform="matrix(0.13 0 0 -0.13 56.09 87.96)">
                                            <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,150,136); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-1821.45, -571.42)" d="M 1795 689 C 1575 657 1386 628 1374 626 C 1311 610 1266 528 1289 472 C 1307 430 1342 400 1381 394 C 1419 388 2249 504 2294 522 C 2330 536 2360 585 2360 628 C 2360 701 2307 751 2233 749 C 2212 748 2015 721 1795 689 z" stroke-linecap="round" />
                                        </g>
                                    </g>
                                </g>
                                <g transform="matrix(NaN NaN NaN NaN 0 0)">
                                    <g style="">
                                    </g>
                                </g>
                                <g transform="matrix(NaN NaN NaN NaN 0 0)">
                                    <g style="">
                                    </g>
                                </g>
                                <g transform="matrix(NaN NaN NaN NaN 0 0)">
                                    <g style="">
                                    </g>
                                </g>
                            </svg>
                        </div>

                        <div class="feature-text">
                            <p>The Vaccine will be critical to ending the pandemic.No steps were skiped in the development
                                process, and safty was a stop priority.</p>

                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
        <div class="col col-lg-4">
            <div class="feature-img">
                <img style="width: 100%" src="fea3.jpg">
            </div>
        </div>


    </div>
    <div>
        <div id="features">
            <!-- <div class="title-text">
                <p> Features</p>
                <h1>SAFE AND EFFECTIVE</h1>
            </div> -->
            <!-- <div class="features-box">
                <div class="features">
                    <h1> SAFTY FIRST</h1>
                    <div class="features-desc">
                        <div class="feature-icon">

                            <i class="fa-solid fa-2xl fa-clipboard-check"></i>

                        </div>
                        <div class="feature-text">
                            <p>The Vaccine will be critical to ending the pandemic.No steps were skiped in the development
                                process, and safty was a stop priority.</p>
                        </div>
                    </div>
                    <h1> TRIED AND TESTED</h1>
                    <div class="features-desc">
                        <div class="feature-icon">
                            <i class="fa-solid fa-2xl fa-magnifying-glass"></i>
                        </div>
                        <div class="feature-text">
                            <p>The Vaccine will be critical to ending the pandemic.No steps were skiped in the development
                                process, and safty was a stop priority.</p>
                        </div>
                    </div>
                    <h1>HEGHLY EFFECTIVE </h1>
                    <div class="features-desc">
                        <div class="feature-icon">

                            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="200" height="200" viewBox="0 0 1080 1080" xml:space="preserve">
                                <desc>Created with Fabric.js 5.2.4</desc>
                                <defs>
                                </defs>
                                <rect x="0" y="0" width="70%" height="70%" fill="transparent"></rect>
                                <g transform="matrix(1 0 0 1 540 540)" id="5c16933c-b8e0-4b10-9389-de0e7751c072">
                                    <rect style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; visibility: hidden;" vector-effect="non-scaling-stroke" x="-540" y="-540" rx="0" ry="0" width="1080" height="1080" />
                                </g>
                                <g transform="matrix(1 0 0 1 540 540)" id="b9897054-1bbd-45a6-ac87-8f71c8510c3b">
                                </g>
                                <g transform="matrix(1 0 0 1 540 540)">
                                    <g style="" vector-effect="non-scaling-stroke">
                                        <g transform="matrix(0.13 0 0 -0.13 -93.77 -39.82)">
                                            <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,150,136); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-697.48, -1529.82)" d="M 780 2055 C 701 2026 495 1929 479 1914 C 450 1887 437 1835 450 1796 C 475 1720 541 1695 628 1729 C 665 1744 680 1746 680 1737 C 680 1731 660 1587 635 1417 C 611 1248 593 1096 597 1080 C 600 1063 618 1036 638 1019 C 669 992 679 988 717 993 C 760 998 801 1025 821 1062 C 832 1082 950 1901 950 1957 C 950 2002 930 2034 890 2055 C 855 2073 827 2073 780 2055 z" stroke-linecap="round" />
                                        </g>
                                        <g transform="matrix(0.13 0 0 -0.13 -9.66 -47.68)">
                                            <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,150,136); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-1328.32, -1588.75)" d="M 1253 2051 C 1152 2017 1080 1936 1061 1836 C 1043 1738 1010 1465 1010 1409 C 1010 1322 1035 1263 1099 1200 C 1217 1083 1382 1079 1505 1192 C 1584 1264 1595 1300 1635 1641 C 1649 1750 1650 1789 1640 1833 C 1604 2008 1423 2110 1253 2051 z M 1390 1810 C 1415 1785 1415 1793 1385 1571 C 1359 1379 1348 1350 1307 1350 C 1272 1350 1250 1379 1250 1424 C 1250 1447 1261 1541 1274 1635 C 1293 1766 1302 1807 1316 1817 C 1341 1836 1367 1833 1390 1810 z" stroke-linecap="round" />
                                        </g>
                                        <g transform="matrix(0.13 0 0 -0.13 84.16 -51.82)">
                                            <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,150,136); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-2031.94, -1619.76)" d="M 1953 2051 C 1860 2019 1784 1940 1760 1850 C 1744 1791 1718 1488 1724 1436 C 1737 1324 1810 1230 1916 1190 C 2090 1125 2283 1239 2314 1425 C 2331 1525 2346 1774 2339 1820 C 2310 2002 2127 2112 1953 2051 z M 2082 1813 C 2094 1802 2100 1783 2100 1751 C 2100 1701 2082 1487 2074 1453 C 2065 1407 1992 1398 1970 1440 C 1963 1453 1964 1509 1974 1627 C 1988 1777 1991 1797 2011 1813 C 2038 1834 2058 1835 2082 1813 z" stroke-linecap="round" />
                                        </g>
                                        <g transform="matrix(0.13 0 0 -0.13 0 47.96)">
                                            <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,150,136); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-1400.76, -871.47)" d="M 1385 991 C 940 926 558 870 538 866 C 477 855 430 783 444 725 C 454 684 501 640 540 634 C 580 628 2249 864 2294 882 C 2330 896 2360 945 2360 988 C 2360 1060 2307 1111 2233 1109 C 2212 1108 1831 1055 1385 991 z" stroke-linecap="round" />
                                        </g>
                                        <g transform="matrix(0.13 0 0 -0.13 56.09 87.96)">
                                            <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,150,136); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-1821.45, -571.42)" d="M 1795 689 C 1575 657 1386 628 1374 626 C 1311 610 1266 528 1289 472 C 1307 430 1342 400 1381 394 C 1419 388 2249 504 2294 522 C 2330 536 2360 585 2360 628 C 2360 701 2307 751 2233 749 C 2212 748 2015 721 1795 689 z" stroke-linecap="round" />
                                        </g>
                                    </g>
                                </g>
                                <g transform="matrix(NaN NaN NaN NaN 0 0)">
                                    <g style="">
                                    </g>
                                </g>
                                <g transform="matrix(NaN NaN NaN NaN 0 0)">
                                    <g style="">
                                    </g>
                                </g>
                                <g transform="matrix(NaN NaN NaN NaN 0 0)">
                                    <g style="">
                                    </g>
                                </g>
                            </svg>
                        </div>

                        <div class="feature-text">
                            <p>The Vaccine will be critical to ending the pandemic.No steps were skiped in the development
                                process, and safty was a stop priority.</p>

                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="features-img">
                <img src="fea3.jpg">
            </div> -->
        </div>

        <!-- <div class="features-img">
   <img src="fea3.jpg">
</div> -->
        <!-- </div>
</div>
</div> -->
      
        <!-- register -->
        <section id="register">
            <div class="title-text">
                <p> REGISTER/LOGIN</P>
            </div>
            <div class="container">
                <div class="box1">
                    <button type="button" class="btn1">Register/login</button>
                </div>
                <div class="box2">
                    <button type="button" class="btn1">Register/login</button>
                </div>
            </div>
        </section>

        <!-- footer -->
        <section id="footer">
            <!-- <img src="flogo2.jpg" class="footer-img"> -->
            <div class="title-text">
                <p>Contact</p>
                <h1>Visit website today</h1>
            </div>
            <div class="footer-row">
                <div class="footer-left">
                    <h1>Links</h1>
                    <h2>HOME</h2>

                    <h2>PRODUTS</h2>
                    <h2>ABOUTS US</h2>
                    <h2>HOSPITAL LOGIN</h2>
                    <h2> PARENT LOGIN</h2>


                </div>

                <div class="footer-right">
                    <h1> Hospitals</h1>
                    <p>Safi</p>
                    <p>Imam Clinic</p>
                    <p> Haleem</p>
                    <p> Ziadudin</p>
                    <p class="email-id"> hospital123@gmail.com<i class="fa fa-paper-plane"></i></p>
                    <h4>+92 - 0120987276<i class="fa fa-phone"></i></h4>
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




        <script>
            var menuBtn = document.getElementById("menuBtn")
            var sideNav = document.getElementById("sideNav")
            var menu = document.getElementById("menu")

            sideNav.style.right = "-250px";

            menuBtn.onclick = function() {
                if (sideNav.style.right == "-250px") {
                    sideNav.style.right = "0";
                    menu.src = "closeb.png";
                } else {
                    sideNav.style.right = "-250px";
                    menu.src = "menu.jpg";
                }
            }
        </script>
</body>

</html>