<?php

class Carnivore extends Animal
{
    public function __construct($nom, $espece, $regime = "carnivore")
    {
        $this->nom = $nom;
        $this->regime = $regime;
        $this->espece = $espece;
    }
}
