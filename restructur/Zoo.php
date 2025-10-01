<?php
class Zoo
{
    public array $visiteur = [];
    public array $animaux = [];
    public function vendreBillet($visiteursTab)
    {
        foreach ($visiteurTab as $visit) {
            $this->visiteursTab[] = $visit;
            echo "$visit->nom achete un billet";
        }
    }
    public function livraison() {}
    public function naissance() {}
    public function ouvrirLesPortes()
    {
        if (!$this->visiteursTab < 5) {
            echo "zoo ouvert";
        } else {
            echo "zoo ferme";
        }
    }
}
