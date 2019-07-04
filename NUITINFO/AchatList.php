
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="./include/styleBoutique.css" />
	<title>Listes des achats </title>
</head>
<body>
    <?php 
        session_start();
		//include("./include/header.php"); 
	?>
	<div class="wrapper">
		<?php include("./include/menus.php"); ?>
		<section id="content" style="margin-top:8%;">
		<?php 
        include("./include/connect.inc.php");
        if(!isset($_SESSION['identified'])){
            header('Location: ./formulaire.php');
        }
        else{
            $identifiant = htmlspecialchars($_SESSION['login']);
            $query="SELECT C.nomCategorie, P.nomProduit, P.prixProduit FROM produits P, categories C, achat A, identifiants I
            WHERE I.idIdentifiants = A.idIdentifiants 
            AND A.idProduit = P.idProduit 
            AND P.idCategorie = C.idCategorie 
            AND I.identifiant = :identifiant";
            $req = $conn->prepare($query);
            $req->execute(array('identifiant'=>$identifiant));
            echo " <center><table border='2' >";
            echo "<caption>Listes des achats</caption>";
            echo '<tr><th>Categorie</th><th>Nom produit</th><th> prix </th></tr>';
            while($achatList = $req->fetch()){
            echo '<tr><td>'.$achatList['nomCategorie'].'</td><td>'.$achatList['nomProduit'].'</td><td>'.$achatList['prixProduit'].'</td></tr>';
            }
           echo  '</table></center>';
        }
        $req->closeCursor();
        ?>
			
			
		</section>
	</div>
	<?php include("./include/footer.php"); ?>
</body>
</html>

