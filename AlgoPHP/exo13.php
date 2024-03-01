<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées
    dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.
</p>

<?php

echo "Les notes obtenues par l'élève sont:";
$Notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
foreach($Notes as $Note) {
    echo " $Note " ;
}
echo "<br>";
$NbNotes = count($Notes);
$TotalNotes = array_sum($Notes);
$Moyenne = round($TotalNotes / $NbNotes, 2);

echo "Sa moyenne générale est donc de : $Moyenne";
