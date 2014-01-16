<!DOCTYPE html>	<!--We use HTML5-->
<html>
<meta charset="UTF-8">
<!--Get head information-->
<?php
	$page = $_GET["page"];
	require( 'head.php' );
?>
<body>

	<!--Load the navbar/logo elements-->
    <?php
        include( 'header.php' );
		include( 'navbar.php' );
    ?>
    
	<!--Set up the middle of the page-->
    <div class="content">
		<div class="container">
			<?php
				include( 'pages/' . $page . ".html" );
			?>
		</div>
    </div>

	<!--Load the footer, site-wide scripts-->
	<?php include( 'footer.php' ); ?>
    <?php include( 'scripts.php'); ?>
	
</body>
</html>
