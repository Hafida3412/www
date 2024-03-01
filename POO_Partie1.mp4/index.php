<h1>POO Entreprise</h1>

<?php

//require "Entreprise.php";
//require "Employe.php";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

$elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01", "14 rue du Rhône", "67100", "STRASBOURG");

echo $elanFormation;
echo $elanFormation->getInfos();
//echo $elanFormation->getRaisonSociale();
//echo $elanFormation->getRaisonSociale()." a été créé le ".$elanFormation->getDateCreation()->format("d.m.Y")." et se situe à l'adresse suivante".$elanFormation->getAdresseComplete();

