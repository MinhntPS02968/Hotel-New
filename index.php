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
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="#"><img class="d-block w-100" src="img/INDULGENCE-PACKAGE.jpg" alt="First slide"></a>
        </div>
        <div class="carousel-item">
            <a href="#"><img class="d-block w-100" src="img/TRENDY-STREET-FOOD.jpg" alt="Second slide"></a>
        </div>
        <div class="carousel-item">
            <a href="#"><img class="d-block w-100" src="img/INDULGENCE-PACKAGE.jpg" alt="Third slide"></a>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container-fluid px-0">
    <div class="row my-5 mx-0">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-8 pr-4 my-2">
                    <img src="img/about-elegance-hospitality.jpg" width="100%" height="100%"/>
                </div>
                <div class="inforbox col-sm-10 offset-sm-1 offset-lg-0 col-lg-4 my-2 text-center">
                    <h2>
                        <div class="infortitle">Elegance Hospitality</div>
                    </h2>
                    <div class="small-line"></div>
                    <div class="text-center infortext">
                        <p>Welcome to Elegance Hospitality Group
                            Elegance Hospitality is a group of hotels which has been becoming very popular among tourist
                            community.
                            Founded in early 2000s, we have developed from our first hotel in Hanoi
                            to the current chain of 8 boutique hotels in Hanoi Old Quarter and 1 outstanding resort
                            in Hoi An Town. Our distinctive collection of properties will redefine the very concept of
                            boutique and luxury... </p>
                    </div>
                    <div class="my-4"><a href="#">ROOMS & RATES</a></div>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <div class="row mx-0 hospitality pt-4">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center"><span class="hos-subtitle">Elegance</span> HOSPITALITY</h2>
                    <div class="center-line"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12 mb-3"><h4 class="Fea-title">FEATURED SERVICES</h4></div>
                    </div>
                    <div class="row services mb-5">
                        <div class="col-lg-3 col-md-6 mb-2">
                            <a href="#"><img class="img-fluid mb-3" src="img/twilight-sky-bar.jpg" alt="" width="100%"/>
                                <h5 class="mb-2">Twilight Sky Bar </h5></a>
                            <p>A spiral staircase leads from Red Bean on the seventh floor to the stylishly cool rooftop
                                terrace.</p>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-2">
                            <a href="#"><img class="img-fluid mb-3" src="img/gourmet-340x205.jpg" alt="" width="100%"/>
                                <h5 class="mb-2">The Gourmet Corner Restaurant</h5></a>
                            <p>Located on the top floor of La Siesta Diamond hotel, the Gourmet Corner restaurant...</p>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-2">
                            <a href="#"><img class="img-fluid mb-3" src="img/Red-Bean-Restaurant.jpg" alt=""
                                             width="100%"/>
                                <h5 class="mb-2">Red Bean Restaurant</h5></a>
                            <p>At Red Bean our vision is to become one of Vietnam’s leading restaurant brands
                                serving...</p>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-2">
                            <a href="#"><img class="img-fluid mb-3" src="img/La-Siesta-Spa.jpg" alt="" width="100%"/>
                                <h5 class="mb-2">La Spa </h5></a>
                            <p>With several years combined experience in the Vietnamese Spa industry, our skilled
                                and...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row packages">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12 mb-3 text-left">
                            <h4 class="Fea-title">FEATURED PACKAGES & OFFERS</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <img class="img-fluid" src="img/Spa2.2.jpg" alt="" width="100%"/>
                            <div class="p-3 bg-infor box-shadow text-left">
                                <span class="subhead py-2">LA SPA</span>
                                <h3 class="mt-1">La Spa Promotions</h3>
                                <p>Visit homepage of our famous La Spa for special offers and promotions.</p>
                                <div class="mb-4"><a href="#">READ MORE</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6 text-left mb-4 pb-2">
                                    <img src="img/trendy-340x205.jpg" alt="" width="100%"/>
                                    <div class="bg-infor box-shadow p-3">
                                        <span class="subhead text-left">HANOI LA SIESTA TRENDY HOTEL & SPA</span>
                                        <h5>Premium Package</h5>
                                        <a href="#">
                                            <div>VIEW DETAIL OFFERS</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-6 text-left mb-4 pb-2">
                                    <img src="img/Lasiesta_getaway-specials-package.jpg" alt="" width="100%"/>
                                    <div class="bg-infor box-shadow p-3">
                                        <span class="subhead text-left">HANOI LA SIESTA HOTEL & SPA</span>
                                        <h5>Premium Package</h5>
                                        <a href="#">
                                            <div>VIEW DETAIL OFFERS</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 text-left mb-4 pb-2">
                                    <img src="img/trendy-340x205.jpg" alt="" width="100%"/>
                                    <div class="bg-infor box-shadow p-3">
                                        <span class="subhead text-left">HANOI LA SIESTA TRENDY HOTEL & SPA</span>
                                        <h5>Premium Package</h5>
                                        <a href="#">
                                            <div>VIEW DETAIL OFFERS</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-6 text-left mb-4 pb-2">
                                    <img src="img/Lasiesta_getaway-specials-package.jpg" alt="" width="100%"/>
                                    <div class="bg-infor box-shadow p-3">
                                        <span class="subhead text-left">HANOI LA SIESTA HOTEL & SPA</span>
                                        <h5>Premium Package</h5>
                                        <a href="#">
                                            <div>VIEW DETAIL OFFERS</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12 ">
                    <div class="tour">
                        <ul class="pl-0 row text-left mb-0">
                            <li class="col-md-11 mx-4">
                                <div class="row tour-border py-4">
                                    <div class="col-md-10 tour-name">Hanoi La Siesta Diamond Special Offers & Packages
                                    </div>
                                    <a class="tour-view col-md-2 text-right" href="#">VIEW DETAIL</a>
                                </div>
                            </li>
                            <li class="col-md-11 mx-4">
                                <div class="row tour-border py-4">
                                    <div class="col-md-10 tour-name">Hanoi La Siesta Diamond Special Offers & Packages
                                    </div>
                                    <a class="tour-view col-md-2 text-right" href="#">VIEW DETAIL</a>
                                </div>
                            </li>
                            <li class="col-md-11 mx-4">
                                <div class="row tour-border py-4">
                                    <div class="col-md-10 tour-name">Hanoi La Siesta Diamond Special Offers & Packages
                                    </div>
                                    <a class="tour-view col-md-2 text-right" href="#">VIEW DETAIL</a>
                                </div>
                            </li>
                            <li class="col-md-11 mx-4">
                                <div class="row tour-border py-4">
                                    <div class="col-md-10 tour-name">Hanoi La Siesta Diamond Special Offers & Packages
                                    </div>
                                    <a class="tour-view col-md-2 text-right" href="#">VIEW DETAIL</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<footer class="footer" id="footer">
    <a onclick="topFunction()" id="myBtn" title="Go to top">Back To Top</a>
    <div class="row pt-5 mx-0" >
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
        } else {
            document.getElementById("myBtn").style.display = "none";
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