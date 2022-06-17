<?php
require_once "Connexion.php";
require_once dirname(__FILE__) . "\..\domaine\Article.php";
class ArticleDao
{
   private $bd;

   public function __construct()
   {
      $this->bd = (new Connexion())->getConnexion();
   }
   public function getAllArticles()
   {
      $req = "select * from article ar , categorie cat where  cat.id = ar.id_cat";
      $resutl = $this->bd->query($req);
      $data = $resutl->fetchAll(PDO::FETCH_OBJ);
      return $data;
   }
   public function getArticleByCat($categ)
   {
      $req = "select  * from categorie cat,article ar where categorie = '$categ' and cat.id = ar.id_cat ";
      $resutl = $this->bd->query($req);
      $data = $resutl->fetchAll(PDO::FETCH_OBJ);
      return $data;
   }
   public function getArticleById($id, $categ)
   {
      $req = "select  * from article ar where id = $id and id_cat = (select id from categorie where nom = '$categ') ";
      $resutl = $this->bd->query($req);
      $data = $resutl->fetchAll(PDO::FETCH_OBJ);
      return $data;
   }
}
