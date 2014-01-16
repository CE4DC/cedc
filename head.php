<?php $page = $_GET[ "page" ]; 
	$name = $_GET[ "name" ];
	echo "<title>CEDC: " . $name . "</title>";
?>
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/bootstrap.css">
<link rel="stylesheet" href="./css/style-<?php echo $page; ?>.css">