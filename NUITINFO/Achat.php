<script>
function myFunction() {
  alert("Hello! I am an alert box!");
}
</script>
<?php
    session_start();
    include('include/connect.inc.php');
    if(isset($_SESSION['identified']) && !empty($_POST['idProduit'])){
        $query = "insert into achat(idAchat, idProduit, idIdentifiants) values (null, :idProduit , :idIdentifiants)";
        $req = $conn->prepare($query);
        $req->execute(array('idProduit'=>$_POST['idProduit'], 'idIdentifiants' => $_SESSION['id']));
		echo'<script>myFunction()</script>';
        header('Location: boutique.php');
		

    }else{
        header('Location: ./formulaire.php');
    }

?>
