<?php
  
   session_start();
   if(!isset($_SESSION['uname']))
   {
	   header('location:http://localhost/water.php');
   }


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>
WATER MANAGEMENT SUPPLY SYSTEM
</title>
    <link rel = "icon" href = "https://i.dlpng.com/static/png/6420178_preview.png" type = "image/x-icon">
<style>
hr{
   margin:auto;
   width:40%;
}
div{
background:lightblue;
}
   body{
  background:url(https://cdn.wallpapersafari.com/29/62/D1MpKi.jpg);
  background-repeat:no-repeat;
  background-size:cover;
}
</style>
</head>
<body>
<header>
<div align="center"> <h1 >WATER MANAGEMENT SUPPLY SYSTEM</h1> 
</div>
<p align ="right"><button onclick="window.location.href = 'water.html';" type="button" align="right"  class="btn btn-primary btn-lg btn-success">LOGIN</button>
</p>
</header>
<section>
<nav>
<div >
  <a class="active" href="web.html">Home</a>
  <a href="Payment.html">OnlinePay</a>   
  <a href="orderwater.html">OrderWater</a>
  <a href="Payment.html">DonationVillage</a> 
  <a href="aboutus.html">About</a> 
  <a href="social.html">Contact</a>
</div>
</nav>
<article>
 
</article>
</section>

 <h4 align="left">
THE OFFER'S WE HAVE IN THIS WATER SYSTEM ARE GIVEN BELOW</h3>
<ul>
<img src="xyz.jpg" width=200px>

<img src="https://5.imimg.com/data5/UI/LD/MY-42332280/packaged-bisleri-drinking-water-500x500.jpg" width=200px>

<img src="p.jpg" width=200px>
<br><b>Need water pipe line</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Daily water bottle supply</b>
&nbsp&nbsp&nbsp<b>Daily water can supply</b>
<div>
<hr>
<h4 align="center">WATER CRISIS IS ONE OF THE MAJOR ISSUS THAT THE WORLD IS FACING AND IT IS THE RESPONSIBILITY,PERHAPS THE <br>
          DUTY OF EACH ONE OF US TO CONTRIBUTE TOWARDS MANAGEMENT.INTELLIGENT UTILLISATION OF WATER <br>
                                          RESOURCES IS THE NEED OF THE HOUR.
</h4>

 <h1 align="center">SAVE WATER......SAVE LIFE<h1>
</div>
<footer>
 <p><b>Contact information: </b><a href="mailto:sayandippaul1998@gmail.com">
  WMSS@gmail.com</a>.</p>
</footer>
</body>
</html>