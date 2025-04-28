<?php 
session_start();

	include("config.php");
	

?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
<title>Apitong's Food & Catering Services</title>
<meta charset ="utf-8">
<link rel="stylesheet" type="text/css" href="css/HomePagecss.php">

</head>

<body>

<!-- Navbar  -->
					
<nav class="shift navbar sticky-top navbar-expand-lg">
<div class="container-fluid">
  <a class="navbar-brand" href="HomePage.php">
<img src ="pictures/apitonglogo.png" class="img-responsive logo">
</a>



  <button class="navbar-toggler mr-left custom-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
>			<span class="navbar-toggler-icon"></span>
            </button>




             <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                   
					<li class="nav-item nav-a">
                        <a class="nav-link" href="HomePage.php">Home</a>
                    </li>

                    <li class="nav-item nav-a">
                        <a class="nav-link" href="Packages.php">Packages</a>
                    </li>

                    <li class="nav-item nav-a">
                        <a class="nav-link" href="About.php">About Us</a>
                    </li>
					
                <ul class="nav navbar-nav flex-row justify-content-center flex-nowrap">


					<div class="input-group">
						<a href="Logout.php"><button name="submit" class="btn" style="background-color: red">Logout</button></a>
	
					</div>
          </div>


</nav>



<header class="page-header header container-fluid"> 

<div class="overlay"> 
<!-- Carousel -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One -->
      <div class="carousel-item active" style="background-image: url('pictures/bg.png')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <!-- Slide Two -->
      <div class="carousel-item" style="background-image: url('pictures/Bg2.jpg')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <!-- Slide Three -->
      <div class="carousel-item" style="background-image: url('pictures/Bg3.jpg')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</div> 




<!-- Description  -->

<div class="description">

	<h1>Apitong's Food & Catering Services</h1>
	<br>
	<h3>Start the occasion with a full belly.</h3>
	<p>
	<br>Here at Apitong's, we do just that. We strive to make any occasion memorable, fun, and satisfying.
	<a href="Packages.php"><button class="btn btn-success my-3" name="more" style="width: 120px;
    height: 40px;
    text-align: center;
    border: none;
    background: #28a745;
    outline: none;
    border-radius: 30px;
    font-size: 1rem;
    color: #FFF;
    cursor: pointer;">Reserve Now</button></a>
</div>
</header>

<div class="container">
	<div class="row">
	</div>
</div>


<!-- Pictures Below the website  -->

<div class="container features">
  <div class="row">

    <div class="col-md-6 col-md-3">

      <h3 class="feature-title">Memories</h3>
     <a href="Album.php">
	<input Name="" type="Image" src="pictures/image 1.jpg" class="img-fluid">
	</a>
      <p>Click the picture above to see the full album!</p>
    </div>
    

<div class="col-md-6 col-md-3">

	<h3 class="feature-title">Album</h3>
     <a href="Album.php">
	<input Name="" type="Image" src="pictures/image 2.jpg" class="img-fluid">
	</a>
      <p>Click the picture above to see the full album!</p>
    </div>
</div>
</div>


<!-- Footer  -->
<div class="global">
	<div class="curve"></div>
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-md-3">
					<h6>Legal</h6>
				<ul >
					<li><a href="TermsCondition.php">Terms & Conditions</a></li>
					<li><a href="PrivacyPolicy.php">Privacy Policy</a></li>
				</ul>
			  </div>
				<div class="col-md-6 col-md-3">
					<h6>Support</h6>
				<ul >
					<li>Phone Number: +639178883334</li>
					<li>Landline: 394-7896<li>
					<li>Email: apitongscatering@business.com</li>
				</ul>
			  </div>
			
				<div class="social">
					<a href="https://www.facebook.com/Dirtysoda11"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/RAVEN75754452?s=09"><i class="fa fa-twitter"></i></a>
					<a href="https://www.instagram.com/algeralddelapaz/"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-snapchat-ghost"></i></a>
			  </div>
		  </div>
				<p class="copyright"> &copy; Apitongs Food & Catering Services. All Rights Reserved</p>
			  </div>
		  </div>
			
	



<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
crossorigin="anonymous"></script>

<script src="main2.js"></script>

</body>

</html>