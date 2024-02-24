<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre 
    passé en paramètre sous la forme:
</p>

<?php

echo "<br>";

echo "Table de 8:";

echo "<br>";

$i = 1;
while($i <= 10){
    echo "<br>";
    echo "$i x 8 = ";
    echo $i * 8;
    $i++;
}
    
echo "<br>";

// FOR
echo "<br>";
echo "Table de 8:";
echo"<br>";

for($i = 0; $i <= 10; $i++){
    echo "8 x ". $i ." = " .(8 * $i). "<br>";
    
}

