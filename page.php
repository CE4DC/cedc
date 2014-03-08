<!DOCTYPE html>	<!--We use HTML5-->
<html>
<meta charset="UTF-8">
<!--Load the navbar/logo elements-->
<?php
    include( 'header.php' );
?>
    
	<!--Set up the middle of the page-->
    <div id="content">
		<div class="container" style="border-top-left-radius: 5px;">
			<?php
				include( 'pages/' . $page . ".html" );
			?>
		</div>
    </div>

	<!--Load the footer, site-wide scripts-->
	<?php include( 'footer.php' ); ?>
	
</body>
</html>
