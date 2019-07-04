<?php 
include("./connect.inc.php");

$cookieName="cookIdent";
	$error="Erreur d'identification ... Recommencer";
    if (!empty($_POST)){ //On verifie si le formulaire a bien ete soumis 
        $query = "SELECT * FROM identifiants where identifiant = :identifiant AND motdepasse= :motdepasse";
        $req = $conn->prepare($query);
        $identifiant = htmlspecialchars($_POST['identifiant']);
        $password = htmlspecialchars($_POST['password']);
        $req->execute(array('identifiant' => $identifiant, 'motdepasse' =>  $password));
        $resultat = $req->fetch();
		if(empty($_POST['identifiant']) || empty($_POST['password']) || !$resultat){ 
		//si il y a une anomalie dans l'entrée de formulaire

			header('Location: ./index.php?error='.$error.''); // on renvoie notre erreur au formulaire via la methode GET
		}
		else{ // cas où l’identification est correcte
			session_start();	//Creation de la session
			$_SESSION['identified'] = "OK";	
			$_SESSION['identifiant'] = $identifiant;	
			echo "ca marche ";
			if($_POST['remember']== "yes"){ // Si l'utilisateur a coché 'se souvenir de moi' on lui crée un cookie
				setcookie($cookieName, "Contenu d'identification", time() + 3600, "/");
			}
			header('Location: ./index.php');
		}
	}
	else {
		// on est arrivé sur cette page sans soumettre le formulaire d’identification
		if(isset($_COOOKIE[$cookieName])){
			session_start();
			$_SESSION['identified'] = "OK";	
			header('Location: ./index.php');
		}else{
			header('Location: ./index.php?error='.$error.'');
		}
	}

?>