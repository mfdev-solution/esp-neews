<?php function showArticles($arrayOfArticle)
{ ?>
    <div class="blogs content">

        <?php if ($arrayOfArticle) { ?>
            <?php foreach ($arrayOfArticle as $article) { ?>
                <a class="single nav-link" href="./index.php?categorie=<?= $article->nom ?>&id=<?= $article->id ?>">
                    <h3 class="title"><?= $article->titre ?></h3>
                </a>
            <?php } ?>
        <?php } else { ?>
            <div class="empty">
                <h2>Aucun article n'a ete publie</h2>
            </div>
        <?php } ?>
    </div>
<?php } ?>

<?php function showArticleById($artObject)
{ ?>
    <div class="details content">
        <?php if (!$artObject) { ?>
            <div class="empty">
                <h2>aucun article </h2>
            </div>
        <?php } else { ?>
            <?php foreach ($artObject as $article) { ?>
                <h2><?= $article->titre ?></h2>
                <div class="content">
                    <p><?= $article->contenu ?></p>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
<?php } ?>