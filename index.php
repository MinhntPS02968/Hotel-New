<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
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
	<section>
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
	</section>
<?php 
	include 'footer.php';
?>
</body>
</html>