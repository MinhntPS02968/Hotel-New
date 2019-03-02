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
                <div class="col-md-2 col-sm-3 sidebar">
                    <!-- The sidebar-->
                    <div id="mysidebar">
                        <ul>
                            <li>
                                <a class="py-3 pl-2" href="#home">ABOUT US</a>
                            </li>
                            <li>
                                <a class="py-3 pl-2" data-toggle="collapse" href="#SERVICES" role="button" aria-expanded="false"
                                   aria-controls="collapseExample">
                                    SERVICES
                                </a>
                                <ul>
                                    <li><a class="dropdown-item py-2" href="#">TOURS</a></li>
                                    <li><a class="dropdown-item py-2" href="#">Another action</a></li>
                                    <li><a class="dropdown-item py-2" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="py-3 pl-2" data-toggle="collapse" href="#HANOIDISCOVERY" role="button" aria-expanded="false"
                                   aria-controls="collapseExample">
                                    HANOI DISCOVERY
                                </a>
                                <ul>
                                    <li><a class="dropdown-item py-2" href="#">TOURS</a></li>
                                    <li><a class="dropdown-item py-2" href="#">Another action</a></li>
                                    <li><a class="dropdown-item py-2" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
<!--                        <a class="py-3 pl-2" href="#home">ABOUT US</a>-->
<!--                        <a class="py-3 pl-2" data-toggle="collapse" href="#SERVICES" role="button" aria-expanded="false"-->
<!--                           aria-controls="collapseExample">-->
<!--                            SERVICES-->
<!--                        </a>-->
<!--                        <div class="collapse border border-left-0 border-right-0" id="SERVICES">-->
<!--                            <a class="dropdown-item py-2" href="#">TOURS</a>-->
<!--                            <a class="dropdown-item py-2" href="#">Another action</a>-->
<!--                            <a class="dropdown-item py-2" href="#">Something else here</a>-->
<!--                        </div>-->
<!--                        <a class="py-3 pl-2" href="#contact">TOURS</a>-->
<!--                        <a class="py-3 pl-2" data-toggle="collapse" href="#HANOIDISCOVERY" role="button" aria-expanded="false"-->
<!--                           aria-controls="collapseExample">-->
<!--                            HANOI DISCOVERY-->
<!--                        </a>-->
<!--                        <div class="collapse border border-left-0 border-right-0" id="HANOIDISCOVERY">-->
<!--                            <a class="dropdown-item py-2" href="#">TOURS</a>-->
<!--                            <a class="dropdown-item py-2" href="#">Another action</a>-->
<!--                            <a class="dropdown-item py-2" href="#">Something else here</a>-->
<!--                        </div>-->
                    </div>
                </div>
                <div class="col-md-10 col-sm-9">
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
                                <div class="row"><h1 class="col-lg-12 mb-3 mt-1">ABOUT US</h1></div>
                                <strong><span style="color: #ad9d83;">WELCOME TO ELEGANCE HOSPITALITY GROUP</span></strong><br/><br/>
                                Elegance Hospitality is a group of hotels which has been very popular among tourist community.
                                Founded in early 2000s, we have developed from our first hotel in Hanoi to the current chain of
                                5
                                boutique hotels in Hanoi Old Quarter and 1 outstanding resort in Hoi An Town. Our distinctive
                                collection of properties will redefine the very concept of boutique and luxury hospitality.<br/><br/>

                                As we strive to be a renowned brand in hospitality, we commit to nurturing and developing our
                                people
                                to be the best in the industry. In addition to the emphasis on creating a desired workplace
                                environment,
                                we put our trust on giving back to society and sharing our success with the community. At
                                Elegance Hospitality Group,
                                our success is not appraised by the number of hotels under our chain, but by the number of
                                lives we touch and inspire along the way.<br/><br/>

                                <span style="color: #ad9d83;"><strong> You can define us by the following key elements:</strong></span><br/><br/>

                                <span class="text-danger"><strong>E</strong></span>laborateness: Attention to details while
                                hosting your stay is always our priority<br/>
                                <span class="text-danger"><strong>L</strong></span>uxury: Every single visit to our hotel will
                                be treated with best facilities and amenities<br/>
                                <span class="text-danger"><strong>E</strong></span>xperience: We ensure you the fresh and
                                interesting experience<br/>
                                <span class="text-danger"><strong>G</strong></span>enerosity: EHG always shows great attitude
                                toward your generosity.<br/>
                                <span class="text-danger"><strong>A</strong></span>miability: EHG ensures that all honorable
                                guests will receive the gentle treat yet with best possible care<br/>
                                <span class="text-danger"><strong>N</strong></span>avigation: Our mission is to guide you to the
                                true beauty of Vietnam<br/>
                                <span class="text-danger"><strong>C</strong></span>ourtesy: EHG ensures to conduct the highest
                                level of politeness while serving you<br/>
                                <span class="text-danger"><strong>E</strong></span>nthusiasm: EHG team always works hard to
                                ensure the second to none service to every single guest.<br/><br/>
                                Look forward to hosting your stay at our EHG !<br/><br/>
                                <img src="img/PQC_9761_resized.jpg" width="229" height="219"/>&nbsp;<br/><br/>
                                Do Van Dan (Mr.)<br/><br/>
                                Chairman/CEO<br/>
                                Elegance Hospitality Group.
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