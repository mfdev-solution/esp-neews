<?php
function getCategories($connexion)
{
   $req = "select * from categorie";
   $res = $connexion->prepare($req);
   $res->execute($res);
   $res->setFetchMode(PDO::FETCH_ASSOC);
   return $res;
}
