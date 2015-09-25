<?php $page = $_GET[ "page" ]; 
	$name = $_GET[ "name" ];
	echo "<title>CEDC: " . $name . "</title>";
?>

<link rel="stylesheet" href="./css/style.css">

<div id="wrapper">
   <div id="header-bg">
      <div id="header">
         <div id="header-logo">
            <a href="page.php?page=index&amp;name=Home"><img src="./img/cedclogo.png" alt="CEDC logo"/></a>
         </div>
         <div id="header-motto">
            <span style="color: #86898C">Serving&nbsp;the&nbsp;developing world...</span><br>
            <span style="color: #3A4958">&nbsp;&nbsp;&nbsp;&nbsp;Developing&nbsp;those&nbsp;who&nbsp;serve.</span>
         </div>
      </div>
   </div>
   <div id="header-nav-bg">
      <div id="header-nav-sep"></div>
      <div id="header-nav">
         <ul>
            <li>
               <a href="page.php?page=index&amp;name=Home">Home</a>
               <div class="header-nav-pointer"></div>
               <!--<span class="header-nav-img"><img src="./img/ps/ab1.jpg" alt="Home"/></span>-->
            </li>
            <li>  
               <a href="page.php?page=about&amp;name=About%20Us">About Us</a>
               <div class="header-nav-pointer"></div>
               <!--<div class="header-nav-img"><img src="./img/ps/ab2.jpg" alt="Home"/></div>-->
            </li>
            <li>
               <a href="page.php?page=projects&amp;name=Projects">Projects</a>
               <div class="header-nav-pointer"></div>
               <!--<div class="header-nav-img"><img src="./img/ps/ab3.jpg" alt="Home"/></div>-->
            </li>
            <li>
               <a href="page.php?page=classroom&amp;name=In%20the%20Classroom">In the Classroom</a>
               <div class="header-nav-pointer"></div>
               <!--<div class="header-nav-img"><img src="./img/ps/classroom1.jpg" alt="Home"/></div>-->
            </li>
            <li>
               <a href="page.php?page=intern&amp;name=In%20the%20Field">In the Field</a>
               <div class="header-nav-pointer"></div>
               <!--<div class="header-nav-img"><img src="./img/trips/f2011.jpg" alt="Home"/></div>-->
            </li>
            <li>
               <a href="page.php?page=contact&amp;name=Contact%20Us">Contact Us</a>
               <div class="header-nav-pointer"></div>
               <!--<div class="header-nav-img"><img src="./img/trips/s2012.jpg" alt="Home"/></div>-->
            </li>
            <li>
               <a href="page.php?page=gallery&amp;name=Gallery">Gallery</a>
               <div class="header-nav-pointer"></div>
               <!--<div class="header-nav-img"><img src="./img/trips/s2013.jpg" alt="Home"/></div>-->
            </li>
         </ul>
		<!--To be added-->
         <!--<div class="header-nav-img" style="visibility: visible; z-index: 0"><img src="./img/ps/ab1.jpg" alt="Home"/></div>-->
      </div>
   </div>
   <div id="content-wrapper">
      <div id="content-body">
