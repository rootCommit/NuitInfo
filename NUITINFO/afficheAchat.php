<?php
try{
	$bdd = new PDO ('mysql:host=localhost; dbname=nuitinfo; charset=utf8','root','');    
	echo "ça marche";
 }

 

catch (Exception $e)
  {     
	die ("Erreur:".$e->getmessage());
}

    session_start();
    if(isset($_SESSION['identified']=="OK")){ // si on est connect
        $identifiant =  $SESSION_['identifiant']; //on recupere l'identifiant existant =
        $query = "SELECT P.idProduit, nomProduit, prix FROM Produit P, Identifiants I, Achat A 
        WHERE I.idIdentifiant = A.idIdentifiant AND P.idProduit = A.idProduit AND C.idendifiant= :identifiant";
        $req = $bdd->prepare($query);
        $req->execute(array('identifiant' => $_SESSION['identifiant'])); // requete pour chercher les articles achete par notre client
        $listArticles = $req->fetch();
        if($listArticles){ //si les produits existent on affiche
            echo "<table border = '2'>";
			echo "<caption>Information produit</caption>";
			echo "<tr><th>id Produi</th><th>Categorie produit</th><th>nom produit</th><th>prix</th></tr>";
            while($listArticles){
                echo "<tr><td> ".$listArticles['idProduit']."</td><td> ".$listArticles['idCategorie']."</td><td> ".$listArticles['nomProduit']."</td><td> ".$listArticles['prixProduit'] ."</td></tr>";
            }
            echo "</table>";
			$req->closeCursor();
        }
    }else{
        header('Location:./FormConnexion.php');
    }

?>