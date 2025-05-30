<?php 
	header ('Content-type: text/css; charset:UTF-8')

?>



/*---------------------------------------------------------- HOMEPGE --------------------------------------------------------*/


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




/* ----------------------------------------------Style the tab------------------------------------- */
.tab {
  overflow: hidden;
  border: 0px solid #fff;
  background-color: #000000;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  color: #fff;

}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #131416;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #131416;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 0px solid #ccc;
  border-top: none;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}

.tabcontent {
  animation: fadeEffect 1s; /* Fading effect takes 1 second */
}

/* Go from zero to full opacity */
@keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}

/* -----Reserve----- */

.btn2 {
  padding: 14px 20px;
  margin: 8px 0;
  margin-left: 330px;
  border: 1px;
  cursor: pointer;
  width: 100%;
  background: #3270e3;
  border-radius: 20px;
  margin-top:15px;
}

/*--------------Header---------------*/
h1 {
  text-align: center;
  color: white;
  padding: 20px 0;
}






/*------About------*/

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #131416;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}


img {
  border-radius: 50%;
   display: block;
  margin-left: auto;
  margin-right: auto;
}
