<!-- Créer une classe de personnage avec comme attributs une taille, sexe, couleur de cheveux.

Créer plusieurs classe qui vont extendre de la classe personnage. Ce seront des enfants. Créer une classe Mecanicien, Developpeur, Pilote d'avion.

Chacun de ces classes enfants auront des particularités
Classe Mécanien :
function qui va affiche "Mon rôle est de réparer des voitures"

Classe Développeur :
function qui va afficher "je suis développeur fullstack"

Classe Pilote : 
Tous les pilotes sont chauves. Il faudra donc remplacer le résultat de la variable de couleur de cheveux -->
<!-- Et ensuite, 2 nouvelles classes vont venir extends la classe développeur :

Une classe développeur Front end qui va remplacer la function qui afficher "je suis développeur fullstack" par "je suis développeur frontend"

Une classe développeur Backend end qui va remplacer la function qui affiche "je suis développeur fullstack" par "j'aime la base de données"  -->
<?php

class Personnage {
    // Attributs
    private $taille;
    private $sexe;
    private $couleurCheveux;

    // Constructeur
    public function __construct($taille, $sexe, $couleurCheveux) {
        $this->taille = $taille;
        $this->sexe = $sexe;
        $this->couleurCheveux = $couleurCheveux;
    }

    // GETTERS
    public function getTaille() {
        return $this->taille;
    }

    public function getSexe() {
        return $this->sexe;
    }

    public function getCouleurCheveux() {
        return $this->couleurCheveux;
    }

    // SETTERS
    public function setTaille($taille) {
        $this->taille = $taille;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    public function setCouleurCheveux($couleurCheveux) {
        $this->couleurCheveux = $couleurCheveux;
    }
}


?>