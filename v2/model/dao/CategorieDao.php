<?php
require_once "Connexion.php";
require_once dirname(__FILE__) . "\..\domaine\Categorie.php";
class CategorieDao
{
   private $bd;

   public function __construct()
   {
      $this->bd = (new Connexion())->getConnexion();
   }
   public function getCategorie()
   {
      $req = "select * from categorie";
      $resutl = $this->bd->query($req);
      $data = $resutl->fetchAll(PDO::FETCH_CLASS, 'Categorie');
      return $data;
   }
   
   
}
