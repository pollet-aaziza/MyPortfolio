<?php
require "connexionDb.php";
require "projectManager.php";


function addImg($db, $image, $path){
  $query = $db->prepare("INSERT INTO images (name, path) VALUES(:name, :path)");
  $result = $query->execute([
    "name" => $image["name"],
    "path" => $path
  ]);
  return $result;
}


function deleteImg($db, $id){
  $query = $db->prepare("DELETE FROM images WHERE id = ?");
  $result = $query->execute([$id]);
  return $result;
}

function getLastImg($db, $imgID){
  $query = $db->query("SELECT * FROM images ORDER BY id DESC ");
  $imgID = $query->fetchall(PDO::FETCH_ASSOC);
  return $imgID;
}
 ?>
