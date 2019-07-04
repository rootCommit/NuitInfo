<?php
    session_start();
    include('include/connect.inc.php');
    if(isset($_SESSION['identified']) && !empty($_POST['idProduit'])){
        $query = "insert into achat(idAchat, idProduit, idIdentifiants) values (null, :idProduit , :idIdentifiants)";
        $req = $conn->prepare($query);
        $req->execute(array('idProduit'=>$_POST['idProduit'], 'idIdentifiants' => $_SESSION['id']));
        header('Location: ./index.php');

    }else{
        header('Location: ./formulaire.php');
    }

?>