<?php 
try{
	$conn = new PDO ('mysql:host=localhost; dbname=nuitinfo; charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		
 }

 

catch (Exception $e)
  {     
  	echo "Erreur !: " . $e->getMessage() . "<br/>";
	die ();
}

?> 