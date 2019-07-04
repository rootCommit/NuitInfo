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
			
		<div class="container">
			<div class="media-container-row">
				<div class="card p-3 col-12 col-md-6 col-lg-3">
					<div class="card-img">
						<a href="pull.php">

						<img src="pull.png" style="width: 50%">	

						</a>
					</div>
					<div class="card-box">
						<h4>
							<a href="pull.php">
								<strong> Pull K2A
								</strong>
							</a>
						</h4>
					</div>
				</div>
				<div class="card p-3 col-12 col-md-6 col-lg-3">
					<div class="card-img">
						<a href="index.php">

						<img src="pull.png" style="width: 50%">	

						</a>
					</div>
					<div class="card-box">
						<h4>
							<a href="">
								<strong> T-Shirt K2A
								</strong>
							</a>
						</h4>
					</div>
				</div>
				<div class="card p-3 col-12 col-md-6 col-lg-3">
					<div class="card-img">
						<a href="index.php">

						<img src="pull.png" style="width: 50%">	

						</a>
					</div>
					<div class="card-box">
						<h4>
							<a href="">
								<strong> Casquette K2A
								</strong>
							</a>
						</h4>
					</div>
				</div>
			</div>
		</div>
	<img src="danse.jpg" style="width: 50%">
		</section>
	</div>
	<?php include("./include/footer.php"); ?>
</body>
</html>
