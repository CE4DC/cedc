<?php $page = $_GET[ "page" ]; 
	$name = $_GET[ "name" ];
	echo "<title>CEDC: " . $name . "</title>";
?>

<link rel="stylesheet" href="./css/style.css">

<div id="wrapper">
<div id="header-bg">
	<div id="header">
		<div id="header-logo">
        	<img src="./img/logo.png" alt="CEDC logo"/>
        </div>
		<div id="header-motto">
        	Serving&nbsp;the&nbsp;developing world
            &nbsp;-&nbsp;
            Developing&nbsp;the&nbsp;students&nbsp;who&nbsp;serve
		</div>
        <div id="header-nav">
        	<ul>
                <li><a href="page.php?page=index&amp;name=Home"><p>Home</p></a></li>
                <li><a href="page.php?page=about&amp;name=About%20Us"><p>About<br>Us</p></a></li>
                <li><a href="page.php?page=projects&amp;name=Projects"><p>Projects</p></a></li>
                <li><a href="page.php?page=classroom&amp;name=In%20the%20Classroom"><p>In The<br>Classroom</p></a></li>
                <li><a href="page.php?page=intern&amp;name=Our%20Interns"><p>Intern<br>Program</p></a></li>
                <li><a href="page.php?page=trips&amp;name=Our%20Trips"><p>Trips</p></a></li>
                <li><a href="page.php?page=calendar&amp;name=Calendar"><p>Calendar</p></a></li>
                <li><a href="page.php?page=contact&amp;name=Contact%20Us"><p>Contact</p></a></li>
                <li><a href="page.php?page=gallery&amp;name=Gallery"><p>Gallery</p></a></li>
            </ul>
        </div>
	</div>
</div>
<div id="content"><div id="content-body">