<?php
// class Voiture{
//     // Attributs
//         // Variable interne à la classe ($this pour les sélectionner à l'intérieur de la classe)
//         public $nombre = 5;
//     // Consctuct
//         // Méthode magique lors de l'instanciation de la classe
//     // Getters
//     // Setters
//     // Methods

// }; 
// $exemple = new Voiture; 
// $exemple = new Voiture; 

// // Ajouter 5 à $nombre dans la classe
// echo $exemple->nombre +=5; 
// echo $exemple->nombre; 

// ------------EXERCICE-----------
// Créer une classe Véhicule avec comme attribut nombre de roue, couleur, année de construction, marque.
// Instancier la classe dans une variable voiture avec 4 roue, la couleur violet, de 2009 et de marque renault.
// Instancier la classe  dans une variable moto avec 2 roue, jaune, de 2023, et de marque Yamaha
// Ajouter 22 à l'année de la voiture et l'afficher
// Ajouter "/ Honda" à la marque de la moto et l'afficher
 


// class Vehicule{
//     // Attributs
//     public $nombreDeRoues;
//     public $couleur;
//     public $anneeConstuction;
//     public $marque;
//         // Variable interne à la classe ($this pour les sélectionner à l'intérieur de la classe)
   
//     // Consctuct 
//         // Méthode magique lors de l'instanciation de la classe
//     public function __construct($nombreDeRoues, $couleur, $anneeConstuction, $marque)
//     {
//         $this->nombreDeRoues = $nombreDeRoues;
//         $this->couleur = $couleur;
//         $this->anneeConstuction = $anneeConstuction;
//         $this->marque = $marque;
//     }
       
//     // Getters
//     public function getNombreDeRoues(){
//         return $this->nombreDeRoues;
//     }
//     public function getCouleur(){
//         return $this->couleur;
//     }
//     public function getAnneeDeConstruction(){
//         return $this->anneeConstuction;
//     }
//     public function getMarque(){
//         return $this->marque;
//     }
//     // Setters
//     public function setNombreDeRoues($setNombreDeRoues){
//         return $this->nombreDeRoues = $setNombreDeRoues;
//     }
//     public function setCouleur($setCouleur){
//         return $this->couleur = $setCouleur;
//     }
//     public function setAnneeDeConstruction($setAnneeDeConstruction){
//         return $this->anneeConstuction = $setAnneeDeConstruction;
//     }
//     public function setMarque($setMarque){
//         return $this->marque = $setMarque;
//     }
//      // Methods
// };
   

// echo '<br>';
// $voiture = new Vehicule(4, "violet", 2009, "Renault"); 
// var_dump($voiture);
// echo '<br>';
// $moto =new Vehicule(2, "jaune", 2023, "Yamaha"); 
// var_dump($moto);
// echo '<br>';
// $voiture->anneeConstuction += 22;
// echo $voiture->getAnneeDeConstruction();
// echo '<br>';
// $moto->marque = $moto->marque . '/ Honda'; 
// echo $moto->getMarque();
// echo '<br>';
// echo 'La voiture de marque ' . $voiture->getMarque() . ' a ' . $voiture->getNombreDeRoues() . ' roues, elle est sortie en ' . $voiture->getAnneeDeConstruction() . ' et elle est de couleur ' . $voiture->getCouleur() . '.';
// echo '<br>';
// echo 'La moto de marque ' . $moto->getMarque() . ' a ' . $moto->getNombreDeRoues() . ' roues, elle est sortie en ' . $moto->getAnneeDeConstruction() . ' et elle est de couleur ' . $moto->getCouleur() . '.';
// echo '<br>';
// require_once "classes/personnages.php";

// classe parent
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
    public function setTaille($setTaille) {
        $this->taille = $setTaille;
    }

    public function setSexe($setSexe) {
        $this->sexe = $setSexe;
    }

    public function setCouleurCheveux($setCouleurCheveux) {
        $this->couleurCheveux = $setCouleurCheveux;
    }
}

// classe enfant

class Mecanicien extends Personnage {
    // Méthode 
    public function afficherRole() {
        return "Mon rôle est de réparer des voitures.";
    }
}

class Developpeur extends Personnage {
    // Méthode
    public function afficherRole() {
        return "Je suis développeur fullstack.";
    }
}

class Pilote extends Personnage {
    public function __construct($taille, $sexe) {
        $this->taille = $taille;
        $this->sexe = $sexe;
        $this->couleurCheveux = "Je n'ai pas de cheveux, je suis chauve";
    }
}

$mecanicien = new Mecanicien("moyen", "homme", "blond");
var_dump($mecanicien);
echo '<br>';
$developpeur = new Developpeur("petit", "femme", "brun");
var_dump($developpeur);
echo '<br>';
$pilote = new Pilote("1.8", "homme");
var_dump($pilote);
echo '<br>';
echo "Le pilote est de taille " . $pilote->getTaille() . ", de sexe " . $pilote->getSexe() . " et est " . $pilote->getCouleurCheveux() . ".";
echo '<br>';

// FRONT
class DeveloppeurFrontend extends Developpeur {
    public function afficherRole() {
        return "Je suis développeur Frontend.";
    }
}

// BACK
class DeveloppeurBackend extends Developpeur {
    public function afficherRole() {
        return "J'aime la base de données.";
    }
}

$dev1 = new Developpeur(1.85, 'femme', 'brun');
$dev2 = new DeveloppeurFrontend(1.70, 'homme', 'blond');
$dev3 = new DeveloppeurBackend(1.95, 'homme', 'brun')

?>
