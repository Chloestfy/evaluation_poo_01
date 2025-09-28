<?php
require_once 'classe/Animal.php';
require_once 'classe/Visiteur.php';
require_once 'classe/Zoo.php';

$animaux = [
    new Tigre("Elodie"),
    new Girafe("Jordan"),
    new Zèbre("Ludo"),
    new Singe("Brian"),
    new Elephant("Chloe"),
    new Lion("Lola"),
];

$visiteurs = [
    new visiteur1("Loïc"),
    new visiteur2("Yannick"),
    new visiteur3("Yassine"),
    new visiteur4("Enzo"),
    new visiteur5("Pierre"),
];

$monZoo = new Zoo();


foreach ($animaux as $animal) {
    $monZoo->livraison($animal);
}


foreach ($visiteurs as $visiteur) {
    $monZoo->vendreBillet($visiteur);
}

$monZoo->ouvrirLesPortes();


echo "Naissances dans le zoo :";
foreach ($animaux as $animal) {
    $animal->donnerNaissance();
}
