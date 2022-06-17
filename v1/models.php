<?php
//connexion a la base de donnees 
require "./config.php";

function recup_art($colonne, $valeur)
{
  global $conn;
  $req = "select * from article where $colonne = '$valeur' ";
  return req_select($conn, $req);
}

function recup_arts()
{
  global $conn;
  $req = "select * from article ";
  return req_select($conn, $req);
}
function getCategories()
{
  global $conn;
  $req = "select * from categorie";
  return req_select($conn, $req);
}
function req_select($conn, $requete)
{
  $query = $conn->prepare($requete);
  $query->execute();
  $query->setFetchMode(PDO::FETCH_BOTH);
  return  $query;
}
