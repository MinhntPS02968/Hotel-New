<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/gijgo.min.css">

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
                                    <form class="col-sm-12" method="post">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label>Check in:*</label>
                                                <div class="form-group">
                                                    <input id="datepicker1" placeholder="MM/DD/YYYY"/>
                                                </div>
                                                <label>Check out:*</label>
                                                <div class="form-group">
                                                    <input id="datepicker2" placeholder="MM/DD/YYYY"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Adults:*</label>
                                                <div class="form-group"><input class="form-control" type="text" placeholder="1"/></div>
                                                <label>Children:*</label>
                                                <div class="form-group"><input class="form-control" type="text" placeholder="0"/></div>
                                            </div>
                                            <div class="col-sm-4"></div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-12">
                                                <table width="100%" class="roomlist text-center" id="roomlistrate" border="2" cellspacing="0" cellpadding="10">
                                                    <thead>
                                                    <tr>
                                                        <th rowspan="2" class="text-left">Room type</th>
                                                        <th colspan="5">Number of Room</th>
                                                    </tr>
                                                    <tr>
                                                        <th>1 person</th>
                                                        <th>2 person</th>
                                                        <th>3 person</th>
                                                        <th>4 person</th>
                                                        <th>5 person</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-left tbltitle">Superior Double or Twin</td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left tbltitle">Deluxe Double or Twin</td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left tbltitle">Deluxe Triple</td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-left tbltitle">Connecting Room</td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-left tbltitle">Junior Suite</td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-left tbltitle">Club Junior Suite</td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-left tbltitle">Family Suite</td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-left tbltitle">La Siesta Suite</td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-left tbltitle">Duplex Suite</td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-left tbltitle">Club Duplex Suite</td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-left tbltitle">Club Duplex Premier</td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="select">
                                                                <option value="0"> No Room</option>
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="3"> 4</option>
                                                                <option value="3"> 5</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 left-label">
                                                <h6>Your Information:</h6>
                                                <ul class="pl-0">
                                                    <li class="mb-2">
                                                        <label>Title:*</label>
                                                        <select id="title" class="select" >
                                                            <option selected="selected" class="" value="Mr">Mr</option>
                                                            <option class="" value="Ms">Ms</option>
                                                            <option class="" value="Mrs">Mrs</option>
                                                            <option class="" value="Dr">Dr</option>
                                                        </select>
                                                    </li>
                                                    <li class="mb-2">
                                                        <label>First Name:*</label>
                                                        <input id="fistname" type="text" class="form-control" name="fistname"/>
                                                    </li>
                                                    <li class="mb-2">
                                                        <label>Last Name:*</label>
                                                        <input id="lastname" type="text" class="form-control" name="lastname"/>
                                                    </li>
                                                    <li class="mb-2">
                                                        <label>Email:*</label>
                                                        <input id="email" type="email" class="form-control" name="email"/>
                                                    </li>
                                                    <li class="mb-2">
                                                        <label>Phone:*</label>
                                                        <input id="phone" type="number" class="form-control" name="phone"/>
                                                    </li>
                                                    <li class="mb-2">
                                                        <label>Country of Residence:*</label>
                                                        <select id="country" class=" form-control" >
                                                            <option selected="selected" value=>Please Select</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Aland Islands">Aland Islands</option>
                                                            <option value="Albania">Albania</option>
                                                        </select>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5 offset-sm-1 left-label">
                                                <h6>ROOM & SERVICE REQUEST INFORMATION:</h6>
                                                <ul class="pl-0">
                                                    <li class="mb-2">
                                                        <label>Arrive with flight number:</label>
                                                        <input id="flightnumber" type="text" class="form-control" name="flightnumber"/>
                                                    </li>
                                                    <li class="mb-2">
                                                        <label>Arrival time:</label>
                                                        <input id="arrivaltime" type="time" class="form-control" name="arrivaltime"/>
                                                    </li>
                                                    <li class="mb-2">
                                                        <label>Request Airport Transfer:</label>
                                                        <select id="AirportTransfer" class="form-control" >
                                                            <option selected="selected" value>No...</option>
                                                            <option value="20.00">4-seater car (VND 460,000) US$20.00</option>
                                                            <option value="22.00">7-seater car (VND 506,000) US$22.00</option>
                                                            <option value="33.00">16-seater van (VND 759,000) US$33.00</option>
                                                            <option value="60.00">25-seater coach (VND 1,380,000) US$60.00</option>
                                                        </select>
                                                    </li>
                                                    <li class="mb-2">
                                                        <label>Other Requests:</label>
                                                        <textarea class="form-control" id="requests" rows="3"></textarea>
                                                    </li>
                                                    <li>
                                                        <p class="mt-4 note">Mandatory fields are marked as "*", but providing more information allows us to better address your needs.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-10 border-bottom my-2 py-2"></div>
                                            <div class="col-sm-1"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 termscond">
                                                <h3 class="mt-2">Terms & Conditions</h3>
                                                    <h5 class="term-text py-2">Rate terms and conditions</h5>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#termsandconditions">
                                                        <p>Click here to see rate terms & conditions and cancellation policy.</a>
                                                    <div class="modal fade text-light" id="termsandconditions" tabindex="-1" role="dialog" aria-labelledby="termsandconditions" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header border-bottom-0">
                                                                    <h3 class="modal-title" id="termsandconditionsTitle">
                                                                        Terms & Conditions
                                                                    </h3>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span class="text-light" aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>
                                                                        Payment Policy : <br>
                                                                        - No fee is applied for payment made by any card type (applicable from 1 Jan. 2014).<br>
                                                                        - All Promotional rates are exclusive of 10% tax and 5% service charges.<br><br>

                                                                        Check-in/out Policy :<br>
                                                                        - Check in: from 14:00;<br>
                                                                        - Check out: no later than 12:00;<br>
                                                                        - Early check-in: subject to room availability.<br><br>

                                                                        Late check-out policy :<br>
                                                                        - Late check-out is subject to room availability<br>
                                                                        - 12:00 to 17:00 check-out: 50% room rate surcharge<br>
                                                                        - After 17:00 check-out: 100% room rate surcharge<br><br>

                                                                        Early arrivals and late departures:<br>
                                                                        - If your arrival is early in the day and you would like immediate access to your room,
                                                                        we recommend reserving for the prior night. Similarly, for late departures, reserving an additional
                                                                        night will guarantee access until you leave the hotel<br><br>

                                                                        Guarantee Policy :<br>
                                                                        - A valid credit card will be required upon booking;<br>
                                                                        - For credit card reservations, the same card(s) must be presented upon check in at the respective hotels;<br>
                                                                        - Management reserves the right to cancel any reservations without notice if we are notified of any fraud or
                                                                        illegal activities associated with the full payments received.<br><br>

                                                                        Children Policy :<br>
                                                                        - Child under 4-year old: free of charge.<br>
                                                                        - Child from 4-year old to under 11-year old: surcharge $10/person/room/night&nbsp;sharing bed with
                                                                        parents OR $20/person/room/night for extra bed..<br>
                                                                        - Child from 11-year old is considered adults and must be included in the total number of adults when making reservation.<br><br>

                                                                        Cancellation/Amendment Policy : This policy defines how to handle cancellations:<br>
                                                                        - If cancellation/amendment is made 72 hours prior to your arrival date, no fee will be charged.<br>
                                                                        - If cancellation/amendment is made within 72 hours, including reservations made within 72
                                                                        hours of your arrival, 1st night’s room rate and tax will be charged<br>
                                                                        - In case of no-show, 100% room rate and tax will be charged.<br>
                                                                        - Early Bird/Long Stay/Last Min/Package Rates are Non - changeable & Non - refundable<br>
                                                                        * The refund process will take approximately 7 to 20 working days. A transaction fee of 3% for Visa card,
                                                                        Master card and 5% for American Express will be applied. Please notify us at info@hanoilasiestahotel.com
                                                                        when you receive the refunded amount.<br><br>

                                                                        Complaints or Comments:<br>
                                                                        We take our guest satisfaction very seriously. Any complaint or comment regarding a stay at one of
                                                                        our hotels should be made in the first instance to the hotel's duty manager at the time of your stay
                                                                        so that we can attempt to resolve it immediately.<br>
                                                                        Problems which cannot be resolved there and then should be notified in writing to Managing Director,
                                                                        Hanoi Elegance hotels, 32 Losu Street, Hanoi,Vietnam<br><br>

                                                                        General information:<br>
                                                                        Although every effort has been made to ensure the accuracy of the information contained online,
                                                                        we cannot accept responsibility for any errors or omissions, and reserve the right to vary, amend,
                                                                        supplement or cancel any of the information or offers featured online at any time.<br><br>

                                                                        Subject to the paragraph immediately below, we shall not be liable to you for any loss or damage in circumstances where:<br><br>

                                                                        1. There is no breach of a legal duty owed to you by us or by our employees or agents;<br>
                                                                        2. Such loss or damage is not a reasonably foreseeable result of any such breach;<br>
                                                                        3. Any increase in loss or damage resulting from breach by you of any term of our contract;<br>
                                                                        4. Any loss is in excess of three times the fee payable in respect of your stay.<br><br>

                                                                        Nothing in these terms and conditions excludes or limits our liability for death
                                                                        or personal injury caused by our negligence or fraudulent misrepresentation.<br><br>

                                                                        These terms and conditions shall be governed by Vietnam law and the Vietnam courts shall have
                                                                        jurisdiction over any matter arising out of or in connection with them.<br><br>
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <label><input class="align-middle" type="checkbox"> I have read and agree to the above Terms and Conditions</label>
                                                <button type="submit" class="reservation my-3">SEND BOOKING</button>
                                            </div>
                                            <div class="col-sm-6"></div>
                                        </div>
                                    </form>
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
<script type="text/javascript" src="js/gijgo.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
    $('#datepicker1').datepicker({
        uiLibrary: 'bootstrap4'
    });

    $('#datepicker2').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
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