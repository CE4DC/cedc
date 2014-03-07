<?php $page = $_GET[ "page" ]; 
	$name = $_GET[ "name" ];
	echo "<title>CEDC: " . $name . "</title>";
?>

<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/bootstrap.css">
<link rel="stylesheet" href="./css/style-<?php echo $page; ?>.css">

<body>

<div id="header">
    <div class="container">                
        <div class="header-text">Serving the developing world</div><img src="./img/logo.png" alt="cedc logo"/><div class="header-text">Developing the students who serve</div>
	</div>
</div>
<div id="header-collapse">
	<div class="container">
		<img src="./img/title.png" alt="title logo"/>
		<div class="header-text" style="color:#FFFFFF; margin-left: 24px;">Serving the developing world; developing the students who serve.</div>
	</div>
</div>

<div id="nav">
    <div class="container">
        <ul id="nav-list" style="margin:50 auto;">
        <!--this centers the UL, but not the LI... workarounds?-->
            <li><a href="page.php?page=index&amp;name=Home" id="home">Home</a></li>
			<li><a href="page.php?page=about&amp;name=About%20Us" id="about">About Us</a></li>
			<li><a href="page.php?page=projects&amp;name=Projects" id="projects">Projects</a></li>
			<li><a href="page.php?page=classroom&amp;name=In%20the%20Classroom" id="classroom">In The Classroom</a></li>
			<li><a href="page.php?page=intern&amp;name=Our%20Interns" id="intern">Intern Program</a></li>
			<li><a href="page.php?page=trips&amp;name=Our%20Trips" id="trips">Trips</a></li>
            <li><a href="page.php?page=calender&amp;name=Calender" id="donate">Calender</a></li>	<!--"donate" because we never bothered to change the script when merging contact/donate pages-->
			<li><a href="page.php?page=contact&amp;name=Contact%20Us" id="contact">Contact/Donate</a></li>
            <li><a href="page.php?page=gallery&amp;name=Gallery" id="gallery">Gallery</a></li>
        </ul>
    </div>
</div>
