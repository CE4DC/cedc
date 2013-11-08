<?php	//HEADER
require( 'header.php' );?>

<?php
	$page = $_GET["page"];	//get what page we want to load
	//Let's wait to incldue this until the other page
	//$article = $_GET['article'];
?>

<div id="content" style="clear: both;">
	<!--	What was this for?
	<link href="css/styles.css" rel="stylesheet" type="text/css" />-->
	<?php include( 'pages/' . $page ); ?>
</div>

<?php	//FOOTER
require( 'footer.php' );?>
