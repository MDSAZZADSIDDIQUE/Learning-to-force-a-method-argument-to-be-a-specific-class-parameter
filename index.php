<?php
class Human
{
}

class Bangladeshi
{
    private $bangladeshi;
    public function __construct()
    {
        $this->bangladeshi = array();
    }

    public function addHuman(Human $human)
    {
        array_push($this->bangladeshi, $human);
    }

    public function count()
    {
        echo count($this->bangladeshi);
    }
}

class Likhon extends Human
{
}
class Sazzad extends Human
{
}

$bangladeshi = new Bangladeshi();
$bangladeshi->addHuman(new Likhon());
$bangladeshi->addHuman(new Sazzad());
$bangladeshi->count();
