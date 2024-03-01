<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture
    à régler à partir de la quantité d'articles, son prix hors taxe et 
    un taux de TVA (exprimé en décimal. Ex: 20%->0.2)</p>


<?php

$PU= 9.99;
$Nombre = 5;
$TauxTVA = 0.2;

$TotalHT = $PU * $Nombre;
$TotalTTC = $TotalHT * (1 + $TauxTVA);

echo "Prix untitaire de l'article: $PU €<br>";
echo "Quantité: $Nombre<br>";
echo "Taux de TVA: $TauxTVA<br>";
echo "Le montant de la facture à régler est de: $TotalTTC €";
