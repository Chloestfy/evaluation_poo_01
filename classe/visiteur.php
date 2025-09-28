<?php
class Visiteur
{

    public $nom;

    public function __construct($n = "inconnue")
    {
        $this->nom = $n;
    }
}

//cree des visiteur

class  visiteur1 extends Visiteur
{
    public function __construct($n = "inconue")
    {
        parent::__construct($n);
    }
}


class  visiteur2 extends Visiteur
{
    public function __construct($n = "inconue")
    {
        parent::__construct($n);
    }
}


class  visiteur3 extends Visiteur
{
    public function __construct($n = "inconue")
    {
        parent::__construct($n);
    }
}



class  visiteur4 extends Visiteur
{
    public function __construct($n = "inconue")
    {
        parent::__construct($n);
    }
}


class  visiteur5 extends Visiteur
{
    public function __construct($n = "inconue")
    {
        parent::__construct($n);
    }
}
