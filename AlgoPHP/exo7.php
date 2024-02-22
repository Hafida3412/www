<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie
    d'un enfant en fonction de son âge:</p>

<?php

$age = 10;

if(gettype($age) == "integer"){
    if($age >=12){
        $resultat = "Cadet";
    }elseif($age >= 10){
        $resultat = "Minime";
    }elseif($age >= 8){
        $resultat = "Pupille";
    }elseif($age >= 6){
        $resultat = "Poussin";
    }else{
        $resultat = "Si la catégorie n'est pas gérée, merci de le préciser.";
    }}
echo "L'enfant qui a $age ans appartient à la catégorie: $resultat.";
