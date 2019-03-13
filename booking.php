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
<div class="container-fluid">
    <div class="row pt-4">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-2 col-sm-3 sidebar d-md-none d-lg-block">
                    <!-- The sidebar-->
                    <div id="mysidebar">
                        <ul class="pl-0">
                            <li>
                                <a class="py-3 pl-2" href="#home">ABOUT US</a>
                            </li>
                            <li>
                                <a class="py-3 pl-2" data-toggle="collapse" href="#SERVICES" role="button" aria-expanded="false"
                                   aria-controls="collapseExample">
                                    SERVICES
                                </a>
                                <ul class="pl-0 collapse border border-left-0 border-right-0" id="SERVICES">
                                    <li><a class="dropdown-item py-2" href="#">TOURS</a></li>
                                    <li><a class="dropdown-item py-2" href="#">Another action</a></li>
                                    <li><a class="dropdown-item py-2" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="py-3 pl-2" href="#home">TOURS</a>
                            </li>
                            <li>
                                <a class="py-3 px-2" data-toggle="collapse" href="#HANOIDISCOVERY" role="button" aria-expanded="false"
                                   aria-controls="collapseExample">
                                    HANOI DISCOVERY
                                </a>
                                <ul class="pl-0 collapse border border-left-0 border-right-0" id="HANOIDISCOVERY">
                                    <li><a class="dropdown-item py-2" href="#">TOURS</a></li>
                                    <li><a class="dropdown-item py-2" href="#">Another action</a></li>
                                    <li><a class="dropdown-item py-2" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10 col-sm-12">
                    <!-- Page content -->
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-6 aboutus-subhead mb-2">EHG</div>
                            <div class="col-lg-6 text-right">
                                <span class="share-title">SHARE</span>
                                <ul class="item-set pl-0">
                                    <li class="item email"><a href="javascript:void(0)" title="Email"></a></li>
                                    <li class="item facebook"><a href="javascript:void(0)" title="facebook"></a></li>
                                    <li class="item twitter"><a href="javascript:void(0)" title="twitter"></a></li>
                                    <li class="item pinterest"><a href="javascript:void(0)" title="pinterest"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 aboutus-text pb-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row"><h1 class="col-lg-12 mb-3 mt-1">BOOKING ON REQUEST</h1></div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p class="py-2 pl-3 mt-3 bg-light">Mandatory fields are marked as "*", but by providing more information it will allow us to better address your needs.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<?php include_once "footer.php"; ?>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 350 && document.body.scrollTop < 900 || document.documentElement.scrollTop > 350 && document.documentElement.scrollTop < 900) {
            document.getElementById("myBtn").style.display = "block";
            document.getElementById("mysidebar").style.top = "70px";
            document.getElementById("mysidebar").style.position = "fixed";
        } else if (document.body.scrollTop >= 900 || document.documentElement.scrollTop >= 900) {
            document.getElementById("mysidebar").style.bottom = "40px";
            document.getElementById("mysidebar").style.top = "unset";
            document.getElementById("mysidebar").style.position = "absolute";
        } else{
            document.getElementById("myBtn").style.display = "none";
            document.getElementById("mysidebar").style.top = "400px";
            document.getElementById("mysidebar").style.position = "unset";
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