<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est 
    palindrome.</P>


<?php

$Phrase1 = "Engage le jeu que je le gagne";
$Phrase2 = strrev($phrase1);
$string_reverse = str_split($phrase2);
$palindrome = "";
foreach($string_reverse as $Value){
    $palindrome .= $Value;
}