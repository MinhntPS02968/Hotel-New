<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>
    <title>Hotel</title>
</head>
<body>
<?php
include 'header.php';
?>
<div class="head-banner"></div>
<div class="container main">
    <!-- The sidebar-->
    <div id="mysidebar" class="sidebar pt-4">
        <a class="py-3 pl-2" href="#home">ABOUT US</a>
        <a class="py-3 pl-2" data-toggle="collapse" href="#SERVICES" role="button" aria-expanded="false" aria-controls="collapseExample">
            SERVICES
        </a>
            <div class="collapse border border-left-0 border-right-0" id="SERVICES">
                <a class="dropdown-item py-2" href="#">TOURS</a>
                <a class="dropdown-item py-2" href="#">Another action</a>
                <a class="dropdown-item py-2" href="#">Something else here</a>
            </div>
        <a class="py-3 pl-2" href="#contact">TOURS</a>
        <a class="py-3 pl-2" data-toggle="collapse" href="#HANOIDISCOVERY" role="button" aria-expanded="false" aria-controls="collapseExample">
            HANOI DISCOVERY
        </a>
        <div class="collapse" id="HANOIDISCOVERY">
            <a class="dropdown-item" href="#">TOURS</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>

    <!-- Page content -->
    <div class="content pt-4">
        <div class="row">
            <div class="col-lg-6">EHG</div>
            <div class="col-lg-6">SHARE</div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1>ABOUT US</h1>
            </div>
        </div>
    </div>
</div>

<footer class="footer" id="footer">
    <a onclick="topFunction()" id="myBtn" title="Go to top">Back To Top</a>
    <div class="row pt-5">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="row mb-3">
                <div class="col-md-3">
                    <div class="row mb-3 pb-1 address">
                        <h6>EHG</h6>
                        <ul class="pl-0">
                            <li>HEAD OFFICE: Asia Tower, Unit 402, 6 Nha Tho Str., Hanoi, Vietnam</li>
                            <li>Tel: (+84 24) 3862 2222</li>
                            <li>Hotline: (+84) 936 453 684</li>
                            <li>Email: <a href="#">dosm@elegancehospitalitygroup.com</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-sm-12"><h6 class="row">FIND US ON</h6></div>
                        <ul class="social col-sm-8 pl-0">
                            <li class="facebook float-left mr-2">
                                <a href="#">facebook</a>
                            </li>
                            <li class="instagram float-left mr-2">
                                <a href="#">instagram</a>
                            </li>
                            <li class="youtube float-left mr-2">
                                <a href="#">youtube</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row newsletter">
                        <a class="mb-2" href="#">JOIN ELEGANCE NEWSLETTER</a>
                        <div><p>Get the latest news from elegance hospitality</p></div>
                    </div>
                </div>
                <div class="col-md-6 text-left">
                    <div class="row pl-3">
                        <div class="col-sm-4">
                            <h6>THINGS TO KNOW</h6>
                            <ul class="pl-0">
                                <li class="my-2"><a href="#">Loyalty</a></li>
                                <li class="my-2"><a href="#">Legal Policy</a></li>
                                <li class="my-2"><a href="#">Telephone bookings</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h6>RESTAURANT & BARS</h6>
                            <ul class="pl-0">
                                <li class="my-2"><a href="#">Loyalty</a></li>
                                <li class="my-2"><a href="#">Legal Policy</a></li>
                                <li class="my-2"><a href="#">Telephone bookings</a></li>
                                <li class="my-2"><a href="#">Legal Policy</a></li>
                                <li class="my-2"><a href="#">Telephone bookings</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h6>LA SPA</h6>
                            <ul class="pl-0">
                                <li class="my-2"><a href="#">Loyalty</a></li>
                                <li class="my-2"><a href="#">Legal Policy</a></li>
                            </ul>
                        </div>
                        <div class="row pl-3">
                            <div class="col-sm-12">
                                <h6>ACCEPTED CARDS</h6>
                                <img class="img-fluid" src="img/pay.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6>ELEGANCE HOSPITALITY</h6>
                    <div class="row">
                        <div class="col-sm-8 ml-2 mt-2"><h6>HANOI</h6></div>
                        <ul class="pl-4">
                            <li class="my-2"><a href="javascript:void(0)" title="Hanoi E Central Hotel"
                                                data-toggle="popover" data-placement="left"
                                                data-content="
                        No:18 Lo Su Str, Hoan Kiem Dist, Hanoi, Vietnam
                        Tel: +84 24 39380175
                        Fax: +84 24 39380177
                        Hotline: (+84) 989 707 989
                        Email: booking@hanoielegancehotel.com
                        FIND OUT MORE.."
                                >Hanoi E Central Hotel</a></li>
                            <li class="my-2"><a href="javascript:void(0)" title="Hanoi E Central Hotel"
                                                data-toggle="popover" data-placement="left"
                                                data-content="
                        No:18 Lo Su Str, Hoan Kiem Dist, Hanoi, Vietnam
                        Tel: +84 24 39380175
                        Fax: +84 24 39380177
                        Hotline: (+84) 989 707 989
                        Email: booking@hanoielegancehotel.com
                        FIND OUT MORE.."
                                >Hanoi La Siesta Diamond Hotel & Spa</a></li>
                            <li class="my-2"><a href="javascript:void(0)" title="Hanoi E Central Hotel"
                                                data-toggle="popover" data-placement="left"
                                                data-content="
                        No:18 Lo Su Str, Hoan Kiem Dist, Hanoi, Vietnam
                        Tel: +84 24 39380175
                        Fax: +84 24 39380177
                        Hotline: (+84) 989 707 989
                        Email: booking@hanoielegancehotel.com
                        FIND OUT MORE.."
                                >Hanoi La Siesta Hotel & Spa</a></li>
                            <li class="my-2"><a href="javascript:void(0)" title="Hanoi E Central Hotel"
                                                data-toggle="popover" data-placement="left"
                                                data-content="
                        No:18 Lo Su Str, Hoan Kiem Dist, Hanoi, Vietnam
                        Tel: +84 24 39380175
                        Fax: +84 24 39380177
                        Hotline: (+84) 989 707 989
                        Email: booking@hanoielegancehotel.com
                        FIND OUT MORE.."
                                >Hanoi La Siesta Trendy Hotel & Spa</a></li>
                            <li class="my-2"><a href="javascript:void(0)" title="Hanoi E Central Hotel"
                                                data-toggle="popover" data-placement="left"
                                                data-content="
                        No:18 Lo Su Str, Hoan Kiem Dist, Hanoi, Vietnam
                        Tel: +84 24 39380175
                        Fax: +84 24 39380177
                        Hotline: (+84) 989 707 989
                        Email: booking@hanoielegancehotel.com
                        FIND OUT MORE.."
                                >Hanoi La Siesta Central Hotel & Spa</a></li>
                        </ul>
                        <div class="col-sm-8 ml-2 mt-2"><h6>HOI AN</h6></div>
                        <ul class="pl-4">
                            <li class="my-2"><a href="javascript:void(0)" title="Hanoi E Central Hotel"
                                                data-toggle="popover" data-placement="left"
                                                data-content="
                        No:18 Lo Su Str, Hoan Kiem Dist, Hanoi, Vietnam
                        Tel: +84 24 39380175
                        Fax: +84 24 39380177
                        Hotline: (+84) 989 707 989
                        Email: booking@hanoielegancehotel.com
                        FIND OUT MORE..">La Siesta Hoi An Resort & Spa</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</footer>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
            document.getElementById("mysidebar").style.top = "70px";
        } else {
            document.getElementById("myBtn").style.display = "none";
            document.getElementById("mysidebar").style.top = "400px";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        $('html, body').animate({scrollTop: 0}, '300');
    }

    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
    });
</script>
</body>
</html>