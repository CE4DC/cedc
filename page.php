<! Doctype html >
<html>
<head>
    <?php
    $page = $_GET["page"];
    require( 'head.php' );
    ?>
</head>
<body>
<div id="pagecontainer">
	
    <?php
        include( 'header.php' );
	include( 'navbar.php' );
    ?>
    
    <div class="content">
	<div class="container">
	    <?php
		include( 'pages/' . $page .'.html');
	    ?>
	</div>
    </div>

	<?php
		include( 'footer.php' );
	?>
    
    <?php include( 'scripts.php'); ?>
	
</div>
</body>
</html>
