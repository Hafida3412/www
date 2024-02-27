<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
    Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.
    <br>
    $p1 = new Personne("DUPONT", "Michel", "1980-02-19");<br>
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
</p>

<?php

/*$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");*/

Class Personne{
 private $_nom;
 private $_prenom;
 private $_dateNaissance;

    public function __construct($nom, $prenom, $dateNaissance){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this-> _dateNaissance = new DateTime($dateNaissance);
    }

    public function getNom(){
        return $this->_nom;
    }

    public function getPrenom(){
            return $this->_prenom;
        }

    public function getDateNaissance(){
        return $this->_dateNaissance->format('Y-m-d');
    }

public function calcAge(){   
    return $this->_dateNaissance->diff(new DateTime())->y;
}

public function getInfos(){
    echo $this-> _nom."<br>". $this->_prenom." a<br>". $this->calcAge()."ans<br>";
}
}
/*$poste = new Personne("DUPONT", "Michel", "1980-02-19");
echo $poste->getDateNaissance() ;*/

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
echo $p1->getInfos()."<br>";
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
echo $p2->getInfos()."<br>";

