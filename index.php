<?php 
// Must be called 1st to have access to any session data
session_start();

// "Import" functions	 (like it was typed all write here)
require('functions.php');

?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
		
		<!-- MyBands CSS -->
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<title>My Bands</title>
	</head>
	<body>
		<div id="wrapper" class="container" >
			<header>
				<?php include('layout/header.php')?>	
				<!-- All of the content in the file 
						listed is copied right here -->
			</header>
			<nav>
				<?php include('layout/nav.php')?>	
			</nav>
			<section role="main">
				<?php include('layout/main.php')?>	
			</section>
			<footer>
				<?php include('layout/footer.php')?>	
				
			</footer>
		</div>
	</body>
</html>