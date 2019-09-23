<?php
  try{
      $cnx = new PDO("mysql:host=localhost; dbname=blogdb; charset=utf8", "root", "");
  }
  catch(Exception $e)
  {
      die("Erreur: ".$e->getMessage());
  }
             $req = $cnx->query("select idcat, nom_cat from category");
?>