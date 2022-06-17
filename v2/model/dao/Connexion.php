<?php
class Connexion
{
   private static $bd;

   public static function getConnexion()
   {
      if (self::$bd === null) {
         try {
            self::$bd = new PDO('mysql:host=localhost;dbname=tp;charset=utf8', 'root', '');
         } catch (Exception $e) {
            echo  $e->getMessage();
            self::$bd = null;
         }
      }
      return self::$bd;
   }
}
