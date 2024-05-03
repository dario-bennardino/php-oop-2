<?php

class Product
{

    public $name;
    public $brand;
    public $price;
    public $species;
    public $description;

    public function __construct(string $_name, string $_brand, float $_price, array $_species, string $_description)
    {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->species = $_species;
        $this->description = $_description;
    }

    public function getFullInfo()
    {
        return "$this->name, Marca: $this->brand, Prezzo: €$this->price, Descrizione: $this->description, " . $this->getFullSpecies();
    }

    public function getFullSpecies()
    {
        return implode(', ', $this->species);
    }
}
