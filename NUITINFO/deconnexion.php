<?php
    session_start();
    if(isset($_SESSION['identified'])){
        session_destroy();
    }
    
    header('Location: ./index.php');

?>