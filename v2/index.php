<?php
require_once dirname(__FILE__) . "/controller/Controller.php";
include('./view/head.php');
$controler = new Controller();
#menu de navigation  
$controler->navController();

#controle de page d'accueille
if (isset($_GET['categorie'], $_GET['id'])) {
   $controler->articleById($_GET['id']);
} elseif (isset($_GET['categorie'])) {
   if ($controler->isCat($_GET['categorie'])) {
      $controler->articleByCateg($_GET['categorie']);
   } else {
      echo "cette  categorie n\'existe pas";
   }
} else {

   $controler->allArtcles();
}

include('./view/footer.php');
