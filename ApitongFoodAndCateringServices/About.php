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
<link rel="stylesheet" type="text/css" href="css/Aboutcss.php">



<title>About Us</title>
<meta charset ="utf-8">


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


</nav>

<div class="about-section">
  <h1>About Us</h1>
  <p><b>The Beginning of Success </b></p>
  <p>Apitong's Catering provides a variety of Food and Catering Services throughout Manila. It is founded by Chef Cesar Apitong who was once a Chef from a local restaurant nearby T.I.P.
But due to the pandemic, <br>business hasn't strived and couldn't function after that. After a lot of thinking, Chef decided to create his own Food and Catering Services.</p>

</div>

<h3 style="text-align:center; color: white;">Our Team</h3>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="pictures/1.jpg" alt="Jane" style="width:20%">
      <div class="container">
        <h2>Chedie S Casas</h2>
        <p class="title">Chef & Bartender</p>
        <p>The next boy chef logro.</p>
        <p>chediekyle@hotmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="pictures/darren.jpg" alt="Mike" style="width:20%">
      <div class="container">
        <h2>Darren Pascual</h2>
        <p class="title">Art Director, Production & Scheduler </p>
        <p>Production who provide equipment and more.</p>
        <p>darrenpascual@hotmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="pictures/banel.jpg" alt="John" style="width:20%">
      <div class="container">
        <h2>Edwin Banel</h2>
        <p class="title">Cameraman,Photographer & Designer</p>
        <p>The most important thing the memory capturer and designer.</p>
        <p>johnedwin@hotmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>





 <div class="column">
    <div class="card">
      <img src="pictures/gerald.jpg" alt="John" style="width:20%">
      <div class="container">
        <h2>Gerald Dela Paz</h2>
        <p class="title">Co-Founder & Service crew leader</p>
        <p>Vice President of Apitong’s Food & Catering Services and Leader in service crew .</p>
        <p>geraldbato@hotmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>



 <div class="column">
    <div class="card">
      <img src="pictures/cesar.jpg" alt="John" style="width:15%">
      <div class="container">
        <h2>Cesar Abilong</h2>
        <p class="title">Chef & Founder Ceo of Apitong’s Food & Catering Services</p>
        <p>The founder of Apitong’s Food & Catering Services and lead taker.</p>
        <br><p>aptiongkaiser@hotmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>








<!-- Footer  -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

<script src="main.js"></script>

</body>

</html>