<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance 
    (en années, mois, jours).

<?php

$DateNaissance = new DateTime('1985-01-17');
$DateCourante = new DateTime('2018-05-21');
$Age = $DateNaissance->diff($DateCourante);
echo "<br>";
echo "Age de la personne: " . $Age->y ." ans $Age->m " . " mois et " . $Age->d. " jours.";