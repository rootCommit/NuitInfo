<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="./include/styleBoutique.css" />
	<title>Bureau Des Elites de Blagnac </title>
</head>
<body>
	<?php 
		session_start();
		require_once("./include/connect.inc.php");
		//include("./include/header.php"); 
	?>
	<div class="wrapper" style="margin-top:6 %;">
		<?php include("./include/menus.php"); ?>
		<section id="content" >
		
		<video controls preload="metadata" loop poster="img/k2a.png" style="width=80%;height=40%;">
		<source src="test.mp4">
		</video>
		
		</section>
	</div>
	
</body>
</html>
