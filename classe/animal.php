<?php

abstract class Animal
{
    public $type;
    public $nom;
    public $race;

    public function __construct($t, $n = "inconnue", $r)
    {
        $this->type = $t;
        $this->nom = $n;
        $this->race = $r;
    }

    public function faireLeShow()
    {
        echo "$this->nom fait son show !";
    }

    public function donnerNaissance($r = "Tigre")
    {
        echo $this->nom . " a donné naissance à un bébé " . $this->race . " !<br>";
    }
}



class Tigre extends Animal
{
    public function __construct($n = "inconue", $t = "carnivore", $r = "Tigre")
    {
        parent::__construct($t, $n, $r);
    }
    public function faireLeShow()
    {
        echo  $this->nom . " qui est un " . $this->race . ", qui est " . $this->type . " saute a travers un cerceau enflammé !" . "<br>";
    }
}

class Lion extends Animal
{
    public function __construct($n = "inconue", $t = "carnivore", $r = "lion")
    {
        parent::__construct($t, $n, $r);
    }
    public function faireLeShow()
    {
        echo $this->nom .  " qui est un " . $this->race . ", qui est " . $this->type . " rugit fierement !" . "<br>";
    }
}


class Zèbre extends Animal
{
    public function __construct($n = "inconue", $t = "herbivores", $r = "zèbre")
    {
        parent::__construct($t, $n, $r);
    }
    public function faireLeShow()
    {
        echo $this->nom .  " qui est un " . $this->race . ", qui est " . $this->type . " galope en rond, ses rayures brillant sous les projecteurs !" . "<br>";
    }
}


class Elephant extends Animal
{
    public function __construct($n = "inconue", $t = "herbivores", $r = "Elephant")
    {
        parent::__construct($t, $n, $r);
    }
    public function faireLeShow()
    {
        echo $this->nom .  " qui est un " . $this->race . ", qui est " . $this->type . " lève sa trompre et salue !" . "<br>";
    }
}


class Girafe extends Animal
{
    public function __construct($n = "inconue", $t = "herbivores", $r = "Girafe")
    {
        parent::__construct($t, $n, $r);
    }
    public function faireLeShow()
    {
        echo $this->nom . " qui est un " . $this->race . ", qui est " . $this->type . " tend son long cou pour attraper des feuilles !" . "<br>";
    }
}


class Singe extends Animal
{
    public function __construct($n = "inconue", $t = "omnivores", $r = "singe")
    {
        parent::__construct($t, $n, $r);
    }
    public function faireLeShow()
    {
        echo $this->nom .  " qui est un " . $this->race . ", qui est " . $this->type . " se balance de corde en corde !" . "<br>";
    }
}
