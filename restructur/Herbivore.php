<?php

class Herbivore extends Animal
{
    public function __construct($nom, $espece, $regime = "herbivore")
    {
        $this->nom = $nom;
        $this->regime = $regime;
        $this->espece = $espece;
    }
}
