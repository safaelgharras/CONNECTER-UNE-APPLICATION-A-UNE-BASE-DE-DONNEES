<?php
class Article{
    public $titre;
    public $contenu;


    public function afficher() {
    return "Titre : " . $this->titre . "<br>" . " Contenu : ". $this->contenu;
    }    
}

$article1 = new Article();
$article1->titre = "Crime et Châtiment (partie 1) " ;
$article1->contenu = "Présente Raskolnikov, un étudiant pauvre à Saint-Pétersbourg, qui élabore la théorie qu’un homme « extraordinaire » peut transgresser la loi pour un bien supérieur.
Obsédé par la misère et l’injustice, il décide de tuer une vieille prêteuse sur gages qu’il juge nuisible à la société.
La partie se termine par le meurtre brutal de la prêteuse et de sa sœur, marquant le début de sa chute psychologique.";

echo $article1->afficher();


$article2 = new Article();
$article2->titre = "Crime et Châtiment (partie 2) ";
$article2->contenu = "Raskolnikov sombre dans la fièvre, la paranoïa et la culpabilité après le meurtre, craignant d’être découvert à chaque instant.
Il retourne sur les lieux du crime et adopte un comportement étrange qui attire l’attention de la police, notamment lors d’un interrogatoire indirect.
En parallèle, il rencontre Marmeladov et sa fille Sonia, dont la misère et la dignité contrastent avec son crime et accentuent son tourment moral.";

echo "<br><br>" . $article2->afficher();