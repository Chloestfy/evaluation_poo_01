<?php
class Animal
{
    public string $nom;
    public string $regime;
    public string $espece;
    public function faireLeShow()
    {
        echo "Cet animal $this->regime qui est un $this->espece et qui s'appel $this->nom";
    }


    public function donnerNaissance() {}
}
