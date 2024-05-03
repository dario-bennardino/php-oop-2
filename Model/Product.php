<?php

class Product
{

    public $name;
    public $price;
    public $species;
    public $description;

    public function __construct(string $_name, float $_price, array $_species, string $_description)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->species = $_species;
        $this->description = $_description;
    }

    public function getFullInfo()
    {
        return "$this->name, $this->price, " . $this->getFullSpecies();
    }

    public function getFullSpecies()
    {
        return implode(', ', $this->species);
    }
}
