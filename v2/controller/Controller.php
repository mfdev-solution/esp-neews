<?php
require_once dirname(__FILE__) . "/../model/dao/CategorieDao.php";
require_once dirname(__FILE__) . "/../model/dao/ArticleDao.php";
require_once dirname(__FILE__) . "/../view/navView.php";
require_once dirname(__FILE__) . "/../view/bodyView.php";

class Controller
{

   public function __construct()
   {
   }
   public function navController()
   {
      $catDao = new CategorieDao();
      nav($catDao->getCategorie());
   }
   public function allArtcles()
   {
      $articles = new ArticleDao();
      showArticles($articles->getAllArticles());
   }
   public function isCat($cat)
   {
      $categoreObject = new CategorieDao();
      $categories = $categoreObject->getCategorie();
      foreach ($categories as $categ) {
         if ($categ->nom == $cat)
            return true;
      }
      return false;
   }
   public function articleByCateg($categ){
      $articles = new ArticleDao();
      showArticles($articles->getArticleByCat($categ));
   }
   public function articleById($id_art){
      $articles = new ArticleDao();
      showArticleById($articles->getArticleById($id_art));
   }
}
