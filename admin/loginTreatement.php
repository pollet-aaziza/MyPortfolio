<?php
require "../model/connexionDb.php" ;
require "../model/loginManager.php";
//On vérifie si le formulaire a été rempli
// if(!empty($_POST)) {
  //On récupère l'utilisateur stocké sur le site
//   $admin = getAdmin($_POST, $db);
// }
  //On vérifie si la db a trouvé un utilisateur
  // if ($admin["name"] === $_POST ["admin_name"] && $password["password"] === $_POST["admin_password"]){
  //   session_start();
  //  $_SESSION["name"] = $admin;
  //    header("location: index.php");
  //   exit;
  //
  //  }
  //
  // else {
  //
  //   header("Location: login.php");
  //   exit;
  // }
  //On vérifie si le formulaire a été rempli
if(!empty($_POST)) {
  //On récupère l'utilisateur stocké sur le site
  $admin = getAdmin($_POST, $db);
  //On vérifie si la db a trouvé un utilisateur
  if(!empty($admin) && password_verify($_POST["admin_password"], $admin["password"])) {
    initializeUserSession($admin);
    header("Location: products.php");
    //On met un exit pour arrêter l'execution du script, autrement la redirection n'aura pas le temps de se faire
    exit;
  }
  else {
    header("Location: login.php");
    exit;
  }
}

  ?>
