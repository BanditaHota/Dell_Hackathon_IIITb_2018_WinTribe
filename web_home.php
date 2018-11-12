<?php

$x=mysqli_connect("localhost","root","","laptops");

?>

<html>
<head>
  <title>::LappyPlace::</title>
  <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
 <link href="css/styles.css" rel="stylesheet" type="text/css">
 </head>
 
 <body>
   <div id="wrapper">
   <div id="header">
      <div id="main-header">
	  <div id="logo">
	    <span id="ist">Lappy</span><span id="iist">Place.com</span>
	  </div>
	  <div id="search">
	  <form action="">
	    <input class="search-area" type="text" name="text" placeholder="Search Here">
		<input class="search-btn" type="submit" name="submit" placeholder="SEARCH">
	  </form>
	  </div>
	  <div id="user-menu">
	  <li><a href="#">Cart</a></li>
	  <li><a href="login.php">Login</a></li>
	  </div>
	</div>
	</div>
	<div id="navigation">
	  <nav>
	     <a href="web_home">Home</a>
		 <a href="laptop1.php">Laptops</a>
		 <a href="#">Accessories</a>
		 <a href="#">Contact Us</a>
	  </nav>
	</div>
	<div id="slider">
	<ul class="bxslider">
	  <li><img src="images1/10-features-about-googles-first-high-end-laptop-chromebook-pixel.jpg"></li>
	  <li><img src="images1/aHR0cDovL3d3dy5sYXB0b3BtYWcuY29tL2ltYWdlcy93cC9sYXB0b3Atc2xpZGVzaG93LzE4MjMzOS5qcGc=.jpg"></li>
	  <li><img src="images1/Dell-Inspiron-15-7000-Gaming.jpg"></li>
	  <li><img src="images1/best-surface-laptop-accessories.jpg"></li>
	</ul>
	</div>
	<div class="container">
	<div id="heading-block">
	   <h2>LAPTOPS</h2>
	</div>
	<div class="row">
    
	<div class="prod-box">
	<div class="column">
	   <img src="images1/download (1).jpg" height="180px" width="240px">
	      <h5 style="text-align:center">Dell 3567</h5>
		  <h5 style="text-align:center">Price: Rs 60,000</h5>
	</div>
	</div>
	<div class="prod-box">
	<div class="column">
	   <img src="images1/download (2).jpg" height="180px" width="240px">
	      <h5 style="text-align:center">Dell inspiron 15 3000</h5>
		  <h5 style="text-align:center">Price: Rs 32,000</h5>
	   </div>
	</div>
	<div class="prod-box">
	<div class="column">
	   <img src="images1/images (1).jpg" height="180px" width="240px">
	      <h5 style="text-align:center">Dell 3450</h5>
		  <h5 style="text-align:center">Price: Rs 66,000</h5>
	   </div>
	</div>
	<div class="prod-box">
	<div class="column">
	   <img src="images1/images (2).jpg" height="180px" width="240px">
	      <h5 style="text-align:center">Dell Latitude</h5>
		  <h5 style="text-align:center">Price: Rs 30,000</h5>
	   </div>
	</div>
	</div>
	</div>
	
	<div class="container">
	<div id="heading-block">
	   <h2>ACCESSORIES</h2>
	</div>
	 <div class="row">
    
	<div class="prod-box">
	<div class="column">
	   <img src="images1/dpn088w9x-dell-laptop-backpack-entry-level-original-imaeyz4azbgzz57v.jpg">
	    <h5 style="text-align:center">Dell 16 inch laptop bag</h5>
	    <h5 style="text-align:center">Price: Rs 900</h5>
	</div>
	</div>
	
	<div class="prod-box">
	<div class="column">
	   <img src="images1/download.jpg">
	     <h5 style="text-align:center">Dell A525 Computer Speaker</h5>
	    <h5 style="text-align:center">Price: Rs 8000</h5>
	   </div>
	</div>
	
	
	<div class="prod-box">
	<div class="column">
	   <img src="images1/3165Bg5U4L_SX425_.jpg">
	     <h5 style="text-align:center">Dell 1TB USB 3.0 External Hard Drive</h5>
	    <h5 style="text-align:center">Price: Rs 2700</h5>
	   </div>
	</div>
	
	<div class="prod-box">
	<div class="column">
	   <img src="images1/download (3).jpg">
	     <h5 style="text-align:center">Dell S2830DN Laser Printer</h5>
	    <h5 style="text-align:center">Price: Rs 5000</h5>
	   </div>
	</div>
	</div>
	</div>
	</div>
	<div id="footer">
	  <div class="container">
	     <div class="footer_sub">
		 <h2>*IMPORTANT DETAILS </h2>
		 <p>TRADEMARKS: Ultrabook, Celeron, Celeron Inside, Core Inside, Intel, Intel Logo, Intel Atom, Intel Atom Inside, Intel Core, Intel Inside, Intel Inside Logo, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, vPro Inside, Xeon, Xeon Phi, and Xeon Inside are trademarks of Intel Corporation or its subsidiaries in the U.S. and/or other countries.
            RETURNS POLICY: Dell’s “Returns Policy” found at //www.dell.co.in/applies to all sales. Choose carefully, as order cancellation rights are limited and additional costs may apply. 
            MISTAKES: While all efforts are made to check pricing and other errors, inadvertent errors do occur from time to time and Dell reserves the right to decline orders arising from such errors. 
            Inclusive of all taxes & delivery charges
           ^ The device you buy comes with Windows 8.1 installed. Some Windows 10 features unavailable. See www.windows.com/windows10specs for the Windows 10 features available. Screens simulated, subject to change. Windows Store apps sold separately. App availability and experience may vary by market.
         </p>
		 </div>
		 <div class="footer_sub"></div>
		 <div class="footer_sub"></div>
	  </div>
	</div>
	<script
       src="http://code.jquery.com/jquery-2.2.4.js"
       integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
       crossorigin="anonymous"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/my.js"></script>
	
 </body>
</html>