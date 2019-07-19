<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 16px;
  text-decoration: none;
  font-size: 16px;
  width:160px;

}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}





* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 900px;
  position: relative;
  margin: auto;
  margin-left: 350px;
}

/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  margin-left: -120px;
}

/* Number text (1/3 etc) */
.numbertext {
  color: black;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>

<body style="background-color: #8cb6ea;">

	<h2 style="text-align: center; font-size: 40px;"> Property Management System
	</h2>

		<div class="topnav" style="text-align: center;">
	<b>
  		<a href="homepage.php">Home</a>
  		<a href="#">Our History</a>
  		<a href="#">Services</a>
  		<a href="#">About</a>
  		<a href="Admin/2_admin_log.php">Login</a>
  		<a href="Admin/0_admin_registration.php">Sing up</a>

    </b>
</div>

<br>




<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/1.jpg" style="width:70%">
  <div class="text"><b>Caption 1 </b></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/2.jpg" style="width:70%">
  <div class="text"><b>Caption 2</b></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/3.jpg" style="width:70%">
  <div class="text"><b><b>Caption 3</b></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>




</body>
</html>