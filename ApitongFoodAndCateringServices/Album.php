<?php 
session_start();

	include("config.php");

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

  
<title>Album</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/Albumcss.php">
 </head>

<body>
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


</nav>


<header class="page-header header container-fluid"> 

<div class="overlay"> 
<!-- Carousel -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="12"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="13"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="14"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One -->
      <div class="carousel-item active" style="background-image: url('pictures/birthday.jpg')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <!-- Slide Two -->
      <div class="carousel-item" style="background-image: url('pictures/birthday2.jpg')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <!-- Slide Three -->
      <div class="carousel-item" style="background-image: url('pictures/birthday3.jpg')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>

      <!-- Slide 4 -->
      <div class="carousel-item" style="background-image: url('pictures/catering.jpg')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>

      <!-- Slide 5 -->
      <div class="carousel-item" style="background-image: url('pictures/catering2.jpg')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>

      <!-- Slide 6 -->
      <div class="carousel-item" style="background-image: url('pictures/catering3.jpg')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>

      <!-- Slide 7 -->
      <div class="carousel-item" style="background-image: url('pictures/catering4.jpg')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>

      <!-- Slide 8 -->
      <div class="carousel-item" style="background-image: url('pictures/food.jpg')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>

      <!-- Slide 9 -->
      <div class="carousel-item" style="background-image: url('pictures/food2.jpg')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>

      <!-- Slide 10 -->
      <div class="carousel-item" style="background-image: url('pictures/food3.jpg')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>

      <!-- Slide 11 -->
      <div class="carousel-item" style="background-image: url('pictures/food4.jpg')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>

      <!-- Slide 12 -->
      <div class="carousel-item" style="background-image: url('pictures/food5.jpg')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>

      <!-- Slide 13 -->
      <div class="carousel-item" style="background-image: url('pictures/people.png')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>

      <!-- Slide 14 -->
      <div class="carousel-item" style="background-image: url('pictures/prom 1.jpg')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>

      <!-- Slide 15 -->
      <div class="carousel-item" style="background-image: url('pictures/wedding.jpg')">
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


</header>



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
			
	


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="main.js"></script>
</body>
</html>