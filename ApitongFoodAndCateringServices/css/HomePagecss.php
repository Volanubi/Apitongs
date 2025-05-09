<?php 
	header ('Content-type: text/css; charset:UTF-8')

?>

/*---------------------------------------------------------- HOMEPAGE --------------------------------------------------------*/


body {
  font-family: "Roboto", sans-serif;

  padding: 0;

  margin: 0;

  background: #131416;

}


/*---------------------------------------------------------- navigation bar --------------------------------------------------------*/

 .input-group .btn {

    width: 80px;
    height: 40px;
    text-align: center;
    border: none;
    background: #3270e3;
    outline: none;
    border-radius: 30px;
    font-size: 1rem;
    color: #FFF;
    cursor: pointer;
    transition: .3s;

    
}



.input-group .btn:hover {
    transform: translateY(-5px);
    background: #0f56d9;
}




.navbar {

    background: #fff;
}



.logo {

  height: 50px;
  padding-right: 0px;
  padding-left: 60px; 
  margin-left:-70px;
}


.navbar-brand {
    margin-left: 4em;
    font-family: "Oswald", sans-serif;
    letter-spacing: 0.09em;
    margin: 0%;
    padding: 0;
}

.navbar-nav {
    margin-right:0px;

}

.navbar .navbar-nav .nav-link {
    color: black;
    letter-spacing: 0.15em;
    text-transform: uppercase;
}

.navbar-nav span {
    margin-right: 0rem;
    margin-left: 1rem;
}

.custom-toggler.navbar-toggler {
    border-color: transparent;
}
.custom-toggler .navbar-toggler-icon {
    color: black;
}
.nav-item {
    position: relative;
    right:10%;
    margin-left:3rem;
}

.nav-slash {
    display: flex;
    align-items: center;
    font-size: 11px;
}

.nav-item:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    border-bottom: 1px solid black;
    transition: 0.4s;
}

.nav-item:hover:after {
    width: 75%;
}

.nav-item.nav-social-icon:nth-last-child(1):after {
    border-bottom: none !important;
}

.nav-item.nav-social-icon:nth-last-child(2):after {
    border-bottom: none !important;
}

.nav-item.nav-social-icon:nth-last-child(3):after {
    border-bottom: none !important;
}

/*---------------------------------------------------------- Reserve --------------------------------------------------------*/

#cart_count {
  text-align: center;
  padding: 0.2rem 0.3rem 0.1rem 0.4rem;
  border-radius: 3rem;
}

/*------------------------------------------------ Header -------------------------------------------------*/

.header {

  background-color: #131416;

  position: relative;

}
/*--------------------------------------------- Overlay ----------------------------------------------------*/

.overlay {

  position: absolute;

  min-height: 100%;

  min-width: 100%;

  left: 0;

  top: 0;

  background: rgba(0, 0, 0, 0.6);

}

/*--------------------------------------------------- Description ----------------------------------------------------------*/

.description {

  left: 50%;

  position: absolute;

  top:40%;


  transform: translate(-50%, -55%);

  text-align: center;

}

 

.description h1 {

  font-family: "Gotham Black", sans-serif;
  
  font-size: 90px;
  
  color: white;
}



.description h3 {
  
  color: #fff

}


.description p {
	

  color: #fff;

  font-size: 1.3rem;

  line-height: 1.5;
}



.description button {

  border:1px solid #fff;

  background:#15181c;

  font-size:24px;

  border-radius: 0;

  color:#fff;


}

 

.description button:hover {

  border:1px solid #fff;

  background:#202327;

  color:#fff;

}


/*--------------------------------------------------- Features ---------------------------------------------------*/

.features {

  margin: 4em auto;

  padding: 1em;

  position: relative;

  background: #131416;
}

 

.feature-title {

  color: #fff;

  font-size: 1.3rem;

  font-weight: 700;

  margin-bottom: 20px;

  text-transform: uppercase;

}

 

.features img {

  -webkit-box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);

  -moz-box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);

  box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);

  margin-bottom: 16px;

}

.features p {

color: #fff;

}


/*----------------------------------------------Footer---------------------------------------------------*/


*{
  margin: 0px;
  padding: 0px;
}

.row{
  margin-left: 0px;
  margin-right: 0px;
}

.global{
  padding: 50px;
  color: #f0f9ff;
  margin-top: 80px;
  bottom: 0;
  background: #000;
  opacity: 1;
  width: 100%;
  height: 45%;
  right: 0%
}

.global h6{
  margin-top: 0;
  margin-bottom: 12px;
  font-weight: 700;
  font-size: 18px;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-left:190px;
}

.global ul{
  list-style-type: none;
  line-height: 30px;
  font-size: 15px;
  margin-bottom: 12px;
  margin-left:190px;
}

.global ul a{
  color: #fff;
  text-decoration: none;
  transition: 0.3s;
}

.global ul a:hover{
  opacity: 0.8;
  color: #eee;
}

.global .social{
  width: 100%;
  margin: 0 auto;
  text-align: center;
  padding: 40px;
  padding-bottom: 0px;
  border-top: 1px solid #eee;
  margin-top: 0px;
}

.global .social a{
  font-size: 22px;
  width: 45px;
  height: 45px;
  line-height: 39px;
  display: inline-block;
  border-radius: 50%;
  border: 2px solid #fff;
  box-shadow: 0px 0px 0px 1px rgba(255, 255, 255, 0.4);
  margin: 10px;
  color: #fff;
  opacity: 0.7;
  transition: 0.3s ease-in-out;
}

.global .social a:hover{
  opacity: 0.9;
  box-shadow: 0px 1px 3px 2px rgba(255, 255, 255, 0.9);
}

.global .copyright{
  text-align: center;
  padding-top: 24px;
  font-weight: 500;
  opacity: 0.8;
  font-size: 16px;
}

@media (max-width: 767px) {

    .global .curve{
      left: 5%;
      height: 70%;
    }

    .global h6{
      margin: 0 auto;
      text-align: center;
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .global ul{
      text-align: center;
    }

    .social{
      margin: 0 auto;
    }

}




/*------Carousel------*/

.carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}


