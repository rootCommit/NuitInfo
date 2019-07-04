
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="./include/styles.css" />
	<title>Bureau Des Elites de Blagnac </title>
</head>
<body>
    <?php 
        session_start();
		require_once("./include/connect.inc.php");
		include("./include/header.php"); 
	?>
	<div class="wrapper">
		<?php include("./include/menus.php"); ?>
		<section id="content">
        <?php
            include("./include/connect.inc.php");

            if(isset($_GET['articleId'])){
                $articleId = htmlspecialchars($_GET['articleId']);
                $query = "SELECT * FROM produits WHERE idProduit = :idProduit";
                $req = $conn->prepare($query);
                $req->execute(array('idProduit'=> $articleId));
                if(isset($_GET['articleId'])){
                    $articleId = htmlspecialchars($_GET['articleId']);
                    $query = "SELECT * FROM produits WHERE idProduit = :idProduit";
                    $req = $conn->prepare($query);
                    $req->execute(array('idProduit'=> $articleId));
                    while($produits = $req->fetch()){
                        echo '<img src="img/'.$produits['idProduit'].'.png" style="width: 50%">';
                        echo '<br/> Le '.$produits['nomProduit'].' est en vente au prix de '.$produits['prixProduit'].' euros <br/>';
                        echo "<form action='./Achat.php' method='post'><br/>";
                        echo '<input type="radio" checked="checked" name="idProduit" value="'.$produits['idProduit'].'" /> <br/>';
                        echo '<input type="submit" value="acheter" />';
                        echo "</form>";
                        
                    }
                    $req->closeCursor();
                }
            }

        ?>
		</section>
	</div>
	<?php include("./include/footer.php"); ?>
</body>
</html>
