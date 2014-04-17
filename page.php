<!DOCTYPE html>	<!--We use HTML5-->
<html><body>
<meta charset="UTF-8">
<!--Load the navbar/logo elements-->
<?php include( 'header.php' ); ?>
      <!--Set up the middle of the page-->
			<?php include( 'pages/' . $page . ".html" ); ?>
<!--Load the footer, site-wide scripts-->
<?php include( 'footer.php' ); ?>
</body></html>
