<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="./include/styleBoutique.css" />
	<title>Bureau Des Elites de Blagnac </title>
</head>
<body>
	<?php 
		require_once("./include/connect.inc.php");
		include("./include/header.php"); 
	?>
	<div class="wrapper">
		<?php include("./include/menus.php"); ?>
		<section id="content">
			
		
		<img src="pull.png" style="width: 50%">	
		<?php
		$req = $conn -> prepare("Select * From produits Where nomProduit=:pnomProduit");
		$req -> execute(array('pnomProduit'=>'Pull'));
		while($data=$req->fetch()){
			echo'</br>Le '.$data['nomProduit'].' Kappa2Alpha est en vente au prix de '
			.$data['prixProduit'].'€</br>';
		}
		$req -> closeCursor();
		?>
		<button type="button">Acheter</button>				
		












		
		</section>
	</div>
	<?php include("./include/footer.php"); ?>
</body>
</html>
