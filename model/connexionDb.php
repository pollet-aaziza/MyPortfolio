<?php
//Connexion à la base de données
try
  {
      $db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'phpmyadmin', 'Manzakin2603');
  }
  catch (Exception $e)
  {
      die('Erreur : ' . $e->getMessage());
  }

 ?>
