<h1>Exercice 10</h1>

<p>A partir d'un montant à payer et d'une commande versée pour régler un achat,
    écrire l'algorithme qui affiche à un utilisateur un rendu de monnaie en 
    nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.</p>


<?php

$Montantàpayer = 152;
$Montantverse = 200;
$Resteàpayer = 48;

/*Rendu de monnaie:
4 billets de 10€
1 billet de 5€
1 pièce de 2€
1 pièce de 1€*/

echo "Rendu de monnaie:<br>";
$billet10 = floor($Resteàpayer / 10);
echo "$billet10 billets de 10€ - ";

$reste1 = $Resteàpayer -($billet10 * 10);
$billet5 = floor($reste1 / 5);
echo "$billet5 billet de 5€ - ";

$reste2 = $reste1 - ($billet5 * 5);
$pièce2 = floor($reste2 / 2);
echo " $pièce2 pièces de 2€ - ";

$reste3 = $reste2 - ($pièce2 * 2);
$pièce1 = floor($reste3 / 1);
echo "$pièce1 pièce de 1€";






