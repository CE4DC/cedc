<!DOCTYPE html>	<!--We use HTML5-->
<html>
<meta charset="UTF-8">
<!--Load the navbar/logo elements-->
<?php
    include( 'header.php' );
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
	
</body>
</html>
