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
                                        <div class="row"><h1 class="col-lg-12 mb-3 mt-1">JUNIOR SUITE</h1></div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="row">
                                                    <div id="carouselroom" class="carousel slide col-md-12" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img class="d-block w-100" src="img/JuniorSuite9.jpg" alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="img/JuniorSuite10.jpg" alt="Second slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="img/JuniorSuite16.jpg" alt="Third slide">
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselroom" role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselroom" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                        <p>Enjoy bustling Street View and a generous seating area outfitted with elegant period furniture,
                                                            a large work desk and all the modern amenities.</p>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 text-left">
                                                        <div class="row mt-5">
                                                            <div class="col-sm-3"></div>
                                                            <div class="col-sm-7">
                                                                <a href="booking.php" class="btn reservation">BOOK NOW</a>
                                                            </div>
                                                            <div class="col-sm-2"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-5">BEDS</dt>
                                                            <dd class="col-sm-7">One King bed</dd>
                                                        </dl>
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-5">MAX OCCUPANCY</dt>
                                                            <dd class="col-sm-7">2 Adults + 01 Child under 4</dd>
                                                        </dl>
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-5">EXTRA BED</dt>
                                                            <dd class="col-sm-7">Crib available upon request</dd>
                                                        </dl>
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-5">SMOKING</dt>
                                                            <dd class="col-sm-7">No</dd>
                                                        </dl>
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-5">VIEW</dt>
                                                            <dd class="col-sm-7">Street View</dd>
                                                        </dl>
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-5">ROOM SIZE</dt>
                                                            <dd class="col-sm-7">30 - 32 m2 (323 - 345 sq. ft.)</dd>
                                                        </dl>
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-5">BATHROOM</dt>
                                                            <dd class="col-sm-7">Standing Shower</dd>
                                                        </dl>
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row"><h1 class="col-lg-12 mb-3 mt-1"><span>Room</span> FEATURES</h1></div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <ul class="nav nav-tabs detail-tabs" id="myTab" role="tablist">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link tabs-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link tabs-link" id="services-tab" data-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">SERVICES & AMENITIES</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link tabs-link" id="conditions-tab" data-toggle="tab" href="#conditions" role="tab" aria-controls="conditions" aria-selected="false">ROOM CONDITIONS</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content pt-4" id="myTabContent">
                                                                    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                                                                        <dl class="row mb-0">
                                                                            <dt class="col-sm-5">BEDS</dt>
                                                                            <dd class="col-sm-7">One King bed</dd>
                                                                        </dl>
                                                                        <dl class="row mb-0">
                                                                            <dt class="col-sm-5">MAX OCCUPANCY</dt>
                                                                            <dd class="col-sm-7">2 Adults + 01 Child under 4</dd>
                                                                        </dl>
                                                                        <dl class="row mb-0">
                                                                            <dt class="col-sm-5">EXTRA BED</dt>
                                                                            <dd class="col-sm-7">Crib available upon request</dd>
                                                                        </dl>
                                                                        <dl class="row mb-0">
                                                                            <dt class="col-sm-5">SMOKING</dt>
                                                                            <dd class="col-sm-7">No</dd>
                                                                        </dl>
                                                                        <dl class="row mb-0">
                                                                            <dt class="col-sm-5">VIEW</dt>
                                                                            <dd class="col-sm-7">Street View</dd>
                                                                        </dl>
                                                                        <dl class="row mb-0">
                                                                            <dt class="col-sm-5">ROOM SIZE</dt>
                                                                            <dd class="col-sm-7">30 - 32 m2 (323 - 345 sq. ft.)</dd>
                                                                        </dl>
                                                                        <dl class="row mb-0">
                                                                            <dt class="col-sm-5">BATHROOM</dt>
                                                                            <dd class="col-sm-7">Standing Shower</dd>
                                                                        </dl>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="services-tab">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <ul class="mt-3">
                                                                                    <li>Complimentary laundry service return within 24 hours (except dry cleaning)
                                                                                        Complimentary in room mini bar of drinks and snacks (replenished once daily)
                                                                                        *The above benefits are applicable for direct booking only</li>
                                                                                    <li>FREE Wireless internet access with a Laptop</li>
                                                                                    <li>Welcome drinks & refresh towels</li>
                                                                                    <li>Welcome complimentary fruit platter</li>
                                                                                    <li>Orientation map</li>
                                                                                    <li>Daily complimentary buffet breakfast</li>
                                                                                    <li>Daily complimentary bottled water</li>
                                                                                    <li>Twice-daily housekeeping service</li>
                                                                                    <li>Wooden floor</li>
                                                                                    <li>Dual split-type Air-conditioning</li>
                                                                                    <li>32’’ flat screen TV with cable program</li>
                                                                                    <li>IDD telephone</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <ul class="mt-3">
                                                                                    <li>Complimentary laundry service return within 24 hours (except dry cleaning)
                                                                                        Complimentary in room mini bar of drinks and snacks (replenished once daily)
                                                                                        *The above benefits are applicable for direct booking only</li>
                                                                                    <li>FREE Wireless internet access with a Laptop</li>
                                                                                    <li>Welcome drinks & refresh towels</li>
                                                                                    <li>Welcome complimentary fruit platter</li>
                                                                                    <li>Orientation map</li>
                                                                                    <li>Daily complimentary buffet breakfast</li>
                                                                                    <li>Daily complimentary bottled water</li>
                                                                                    <li>Twice-daily housekeeping service</li>
                                                                                    <li>Wooden floor</li>
                                                                                    <li>Dual split-type Air-conditioning</li>
                                                                                    <li>32’’ flat screen TV with cable program</li>
                                                                                    <li>IDD telephone</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="conditions" role="tabpanel" aria-labelledby="conditions-tab">3</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1"></div>
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