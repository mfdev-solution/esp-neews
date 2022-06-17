<?php
// echo '<pre>';

// // Affiche le résultat de la commande "ls" et retourne
// // la dernière lignes dans $last_line. Stocke la valeur retournée
// // par la commande shelle dans $retval.
// $last_line = system('dir', $retval);

// // Affichage d'autres informations
// echo '
// </pre>
// <hr />La dernière ligne en sortie de la commande : ' . $last_line . '
// <hr />Valeur retournée : ' . $retval;
//echo system('dir', $result);
// echo $_GET['msg'];

require "./models.php";
$categories = getCategories();
foreach ($categories as  $value) {
   echo $value["nom"] . " <br />";
}
