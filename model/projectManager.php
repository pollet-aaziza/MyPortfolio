<?php
require "connexion.php";
require "imgManager.php";

//function to get all projects from db
function getProjects($db){
  $query = $db->query("SELECT p.*, i.path FROM projects AS p INNER JOINT img as i");
  $projects = $query->fetchall(PDO::FETCH_ASSOC);
  return $projects;
}
//function to get one project from db

function getProject($db, $id){
  $query = $db->query("SELECT p.*, i.path FROM projects AS p INNER JOINT img as i WHERE");
  $projects = $query->fetchall(PDO::FETCH_ASSOC);
  return $projects;
}
//function add a project
function addProject($db, $project, $imgId){
  $query = $db->prepare("INSERT INTO projects (project, contents) VALUES(:project, :contents)");
  $result = $query->execute([
    "project" => $project["project"],
    "contents" => $project["contents"]
  ]);
  return $result;
}

//function to update a project
function updateProject(){
  $query = $db->prepare("UPDATE projects SET project = :project WHERE id = :id");
 $result = $query->execute([
   "id" => $project["id"],
   "project" => $project["project"],
}
//function to delete a project
function deleteProject(){
  $query = $db->prepare("DELETE FROM projects WHERE id = ?");
  $imgId = $query->execute([$projet_id]);
  return $imgId;
}
 ?>
