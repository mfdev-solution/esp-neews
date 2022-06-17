<?php
//inclusion du fichier contenant les functions de bases
require_once "./controler.view.php";
require_once "./nav.view.php";
?>
<!DOCTYPE html>
<html>

<?php include('head.php') ?>
<body>
    <div class="container">
        <?php
        nav(getCategories());
        ?>
        <main class="main">
            <?php

            if (@$_REQUEST['id']) {
                showArticlesById("id", $_GET['id']);
            } else if (@$_REQUEST["categorie"]) {
                showAllArticles('categorie', $_GET['categorie']);
            } else {
                afficher_art(recup_arts());
            }


            ?>
        </main>
    </div>

</body>

</html>