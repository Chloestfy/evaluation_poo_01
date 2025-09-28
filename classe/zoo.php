<?php
require_once 'classe/Animal.php';
require_once 'classe/Visiteur.php';

class Zoo
{
    public $animaux = [];
    public $visiteurs = [];


    public function livraison($animal)
    {
        $this->animaux[] = $animal;
        echo "Animal livré : " . $animal->nom . "<br>";
    }

    public function vendreBillet($visiteur)
    {
        $this->visiteurs[] = $visiteur;
        echo "Vente billet au visiteur " . $visiteur->nom . "<br>";
    }

    public function ouvrirLesPortes()
    {
        echo "Les portes du Zoo sont désormais ouvertes<br><br>";

        foreach ($this->visiteurs as $visiteur) {
            echo "------------------------------------------------------------------<br>";
            echo "---------------------" . $visiteur->nom . " commence son parcours ---------------------<br>";
            echo "------------------------------------------------------------------<br><br>";

            foreach ($this->animaux as $animal) {
                if (!empty($animal->nom)) {
                    echo "Cet animal " . $animal->type . " qui est un " . $animal->race . " et qui s’appelle " . $animal->nom . " fait le show<br><br>";
                } else {
                    echo "Cet animal " . $animal->type . " qui est un " . $animal->race . " fait le show<br><br>";
                }

                $animal->faireLeShow();
            }

            echo "------------------------------------------------------------------<br>";
            echo "--------------- Fin de parcours pour " . $visiteur->nom . " ---------------<br>";
            echo "------------------------------------------------------------------<br><br>";
        }
    }
}
