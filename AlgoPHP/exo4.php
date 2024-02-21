<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est un 
    palindrome.</P>


<?php
$phrase1 = "Engage le jeu que je le gagne";
$phrase2 = strrev($phrase1);

if($phrase2 = $phrase1){
$Resultat = "palindrome";
} 

echo "La phrase $phrase1 est $Resultat";
