<! Doctype html >
    
<?php $page = $_GET["page"]; ?>

<html>
<head>
    <?php
    require( 'head.php' );
    ?> 
</head>
<body>
    <?php
        include( 'header.php' );
	include( 'navbar.php' );
    ?>
    
    <div class="content">
	<div class="container">
	    <?php
		include( 'pages/' . $page );
	    ?>
	</div>
    </div>
    
    <?php include( 'scripts.php'); ?>
                  
</body>
</html>
