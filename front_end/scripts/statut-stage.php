<?php
  
  $db = new PDO('mysql:host=localhost; dbname=stages; port=3306', 'root', ''); 
 $c =$db->prepare("UPDATE stage SET ETAT='OK');
 echo $_GET['id'];
//header("Location: ../tdb_professeur.php");