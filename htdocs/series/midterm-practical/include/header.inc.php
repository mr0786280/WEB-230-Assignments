<?php
	
	include_once('include/config.inc.php');

	include_once('include/functions.inc.php');
	
	include_once('include/menu.data.php');
?>


<!DOCTYPE html>

<html lang="en">

<head>  
       	 <meta charset="utf-8">
	
         <meta name ="description" content="this is the insights communcations portal"/>
         <link rel="stylesheet" href = "assets/css/style.css">
	
		
	
		 <title><?php echo $siteName = 'Insights | Communications Portal'; ?></title>
	

</head>
	
		

<body>    

    <header> 
		<a href="index.php">
		
		<h1><a href="index.php">Insights | Communications Portal</a></h1>
		
		</a>
		
		<h2>our connections to our colleagues</h2>
		
		<?php menuBuilder($menuItems);?>
		
	</header>
		

	
	
	
	
	
	
	