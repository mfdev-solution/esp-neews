<?php function afficher_art($query)
{ ?>
    <div class="blogs content">

        <?php if ($query) { ?>
            <?php foreach ($query as $article) { ?>
                <a class="single nav-link" href="./index.php?id=<?= $article["id"] ?>">
                    <h3 class="title"><?= $article["titre"] ?></h3>
                </a>
            <?php } ?>
        <?php } else { ?>
            <p class="">Aucun article n'a ete publie</p>
        <?php } ?>
    </div>
<?php } ?>

<?php function afficher_cont($query)
{ ?>
    <div class="details content">
        <?php foreach ($query as $article) { ?>
            <h2><?= $article['titre'] ?></h2>
            <div class="content">
                <p><?= $article['contenu'] ?></p>
            </div>
        <?php } ?>
    </div>
<?php } ?>