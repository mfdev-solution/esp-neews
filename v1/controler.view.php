
<?php
include("functions.php");
require_once("models.php");
//require_once "./nav.view.php";

function showAllArticles($catName, $catValue)
{
   $query = recup_art($catName, $catValue);
   afficher_art($query);
}
function showArticlesById($id, $idValue)
{
   $query = recup_art($id, $idValue);
   afficher_cont($query);
}
