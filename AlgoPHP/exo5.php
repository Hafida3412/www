<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la 
    convertit en euros. Attention, la valeur générée devra être arrondie
    à 2 décimales.</p>

<?php


$Francs = 100;
$Valeur = 6.56;
$Euros = round($Francs / 6.56, 2);
echo "Montant en francs: $Francs<br>";
echo "$Francs francs = $Euros €<br>";

        

    
