<?php
//on crée une function pour récup user
function getAdmin($db, $name){
  $query = $db->prepare("SELECT * FROM admin WHERE name = ? ");
  $query->execute([$name]);
  $result = $query->fetch(PDO::FETCH_ASSOC);
  return $result;
}
 ?>
