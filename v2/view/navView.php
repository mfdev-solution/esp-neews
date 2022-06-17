<?php function nav($array)
{ ?>

   <body>
      <div class="container">
         <div class=" py-3">
            <div class="container">
               <span class="d-flex text-uppercase entete justify-content-center"> mfdev-news
               </span>
            </div>
         </div>

         <nav id="navbar_top" class=" navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
               <a class="navbar-brand" href="index.php">Actualite</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="main_nav">
                  <ul class="navbar-nav ms-auto">
                     <li class="nav-item"><a class="nav-link text-white" href="index.php">Accueil </a></li>
                     <?php foreach ($array as $values) { ?>
                        <li class="nav-item"><a class="nav-link text-white" href="index.php?categorie=<?= $values->nom ?>"><?= $values->getNom() ?> </a></li>
                     <?php } ?>

                  </ul>

               </div> <!-- navbar-collapse.// -->
            </div> <!-- container-fluid.// -->
         </nav>
         <main class="main">
         <?php } ?>