<?php
#les attributs de la classe article
 class Article
{
    public $titre ;
    public $contenu ;
    public $categorie ;
    public $dateCreation ;
    public $dateModification;
    public function __construct($titre,$contenu,$categorie,$dateCreation,$dateModification)
    {
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->categorie = $categorie;
        $this->dateCreation = $dateCreation;
        $this->dateModification = $dateModification;
    }

    
    
}

?>