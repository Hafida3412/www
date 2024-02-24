<h1>Exercice 12</h1>

<p>A partir d'une fonction personnalisée et à partir d'un tableau 
    de pénoms et de langue associée (tableau contenant clé et valeur),
    dire bonjour aux différentes personnes dans leur langue respective
    (français -> "Salut", anglais -> "Hello", espagnol -> "Hola")

    Exemple: tableau -> Mickael ->FRA, Virgile -> ESP, Marie-Claire -> ENG</p>

<?php

$Personnes = [
    "Mickael" => "Salut",
    "Virgile" => "Hola",
    "Marie-Claire" => "Hello"
];

arsort($Personnes);
foreach($Personnes as $Prénoms => $Langue){
    echo ucfirst($Langue)." ".ucfirst($Prénoms);
    echo "<br>";
}
    