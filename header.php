<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container-fluid">
  	<a class="navbar-brand col-md-2 offset-md-5 offset-lg-0 col-lg-2" href="index.php">
  		<img class="img-fluid" src="img/logo.png">
  	</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="col-lg-10 collapse navbar-collapse text-center pb-2" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">SPECIAL OFFERS</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          OUR PROPERTIES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        	<ul class="dropdown-item">
        		<div class="row pb-1 mb-1 border-bottom"><a href="#">Ha Noi</a></div>
        		<li class="my-1"><a href="#">Hanoi La Siesta Trendy Hotel & Spa</a></li>
        		<li class="my-1"><a href="#">Hanoi La Siesta Hotel & Spa</a></li>
        		<li class="my-1"><a href="#">Hanoi La Siesta Trendy Hotel & Spa</a></li>
        		<li class="my-1"><a href="#">Hanoi La Siesta Hotel & Spa</a></li>
        		<li class="my-1"><a href="#">Hanoi La Siesta Trendy Hotel & Spa</a></li>
        		<div class="row pb-1 mb-1 border-bottom"><a href="#">Hoi An</a></div>
        		<li class="my-1"><a href="#">Hoi An La Siesta Trendy Hotel & Spa</a></li>
        		<li class="my-1"><a href="#">Hoi An La Siesta Hotel & Spa</a></li>
        	</ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">ABOUT US</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SERVICES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        	<ul class="dropdown-item">
        		<li class="my-1"><a href="#">Transfer Service</a></li>
        		<li class="my-1"><a href="#">Vietnam Visa</a></li>
        		<li class="my-1"><a href="#">The Den Bar</a></li>
        		<li class="my-1"><a href="#">Diamond Sky Bar</a></li>
        		<li class="my-1"><a href="#">La Spa</a></li>
        		<li class="my-1"><a href="#">Cooking Class</a></li>
        		<li class="my-1"><a href="#">Red Bean Restaurant</a></li>
        	</ul>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          TOURS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        	<ul class="dropdown-item">
        		<li class="my-1"><a href="#">Transfer Service</a></li>
        		<li class="my-1"><a href="#">Vietnam Visa</a></li>
        		<li class="my-1"><a href="#">The Den Bar</a></li>
        		<li class="my-1"><a href="#">Diamond Sky Bar</a></li>
        		<li class="my-1"><a href="#">La Spa</a></li>
        		<li class="my-1"><a href="#">Cooking Class</a></li>
        		<li class="my-1"><a href="#">Red Bean Restaurant</a></li>
        	</ul>
        </div>
      </li>
    </ul>
    <div class="navbar-nav">
    	<div class="nav-item">
            <a class="nav-link border border-bottom-0 border-top-0 border-left-0 py-0" href="#"><span class="second-nav">EHG NEWS</span></a>
      </div>
    </div>
    <div class="navbar-nav">
    	<div class="nav-item">
            <a class="nav-link" href="#"><span class="second-nav">Contact Us</span></a>
      </div>
    </div>
    <div class="navbar-nav">
    	<div class="nav-item">
            <button type="button" class="reservation" data-toggle="modal" data-target="#exampleModalScrollable">RESERVATION</button>
            <!-- Modal -->
            <div class="modal fade text-light" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <form class="modal-content p-3" method="post">
                        <div class="modal-header border-bottom-0">
                            <h3 class="modal-title text-light" id="exampleModalScrollableTitle">
                                Online booking
                            </h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="text-light" aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row text-left">
                                <label class="col-md-5">Select Hotel</label>
                                <select class="col-md-6">
                                    <option value="All">All</option>
                                    <option value="Hanoi E Central Hotel">Hanoi E Central Hotel</option>
                                    <option value="Hanoi La Siesta Diamond Hotel & Spa">Hanoi La Siesta Diamond Hotel & Spa</option>
                                    <option value="Hanoi La Siesta Hotel & Spa">Hanoi La Siesta Hotel & Spa</option>
                                </select>
                            </div>
                            <div class="row text-left">
                                <label class="col-md-12">Check-in Date</label>
                                <div class="col-md-12">
                                    <div class="row ml-0 mb-2">
                                        <select class="col-md-3 py-2" name="day">
                                            <option value="1">1</option>
                                        </select>
                                        <select class="col-md-3 offset-md-1" name="month">
                                            <option value="1">January</option>
                                        </select>
                                        <select class="col-md-3 offset-md-1" name="year">
                                            <option value="1">2019</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-left">
                                <label class="col-md-5">Number of nights</label>
                                <select class="col-md-6">
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div class="row text-left">
                                <label class="col-md-5">Number of adults</label>
                                <select class="col-md-6">
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="row text-left">
                                <label class="col-md-5">Number of children</label>
                                <select class="col-md-6">
                                    <option value="0">0</option>
                                </select>
                            </div>
                            <div class="row text-left">
                                <label class="col-md-12">Promo Code</label>
                                <input type="text" name="AccessCode" class="col-md-10 ml-3 py-2" value autocomplete="off"> </input>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="reservation">BOOK NOW</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
      </div>
    </div>
  </div>
</nav>
	