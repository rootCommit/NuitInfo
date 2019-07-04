<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="./include/styles.css" />
	<title>Kappa-2-Alpha </title>
</head>
<body>
	<?php 
		//include("./include/header.php"); 
	?>
	<div class="wrapper" style="margin-top:8%;">
		<?php 
			session_start();
			include("./include/menus.php"); ?>
		<?php
			if(isset($_SESSION['identified'])){
				echo $_SESSION['login']."<br/>";
				echo $_SESSION['id']."<br/>";
				echo "Connecté en tant que ".$_SESSION['login'] ;
			}
			
		?>
				<article>
					
					<h2><b> The Chiefs </b></h2><br/><br/>
						<p>
							<font size="5">
								Alpha Wolf : Le Barbu <br/>
								Alpha Wolf : Capitaine Spiderman <br/> 
								Alpha Wolf : Dem's <br/>
								Alpha Wolf : DragonBreath <br/> 
								Alpha Wolf : Coffre-Fort <br/>
								Alpha Wolf : Skywalker <br/>
								Alpha Wolf : SuperViet' <br/>
								Alpha Wolf : Top 1 <br/>
								Alpha Wolf : Le W <br/>
								Alpha Wolf : Solso <br/>
								Alpha Wolf : Liryc <br/>
							</font>
						</p><br/><br/>
						
					<h2><b> The Cubs </b></h2><br/><br/>
						<p>
							<font size="5">
								Alpha Cub : Elouase <br/>
								Alpha Cub : The New One <br/>
								Alpha Cub : Oups <br/>
								Alpha Cub : KimPossible <br/>
								Alpha Cub : Le Dozo <br/>
								Alpha Cub : Papa <br/>
								Alpha Cub : Belek <br/>
								Alpha Cub : Nono <br/>
								Alpha Cub : Twan <br/>
								Alpha Cub : IceTea Boy <br/>
							</font>
						</p>
				</article>
	
	</div>
	<?php include("./include/footer.php"); ?>
</body>
</html>
