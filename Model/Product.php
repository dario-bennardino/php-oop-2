<?php

require_once __DIR__ . '/Category.php';

class Product
{

    public $name;
    public $image;
    public $brand;
    public $price;
    public $species;
    public $description;
    public $category;

    public function __construct(string $_name, string $_image, string $_brand, float $_price, array $_species, string $_description, Category $_category)
    {

        if (empty($_name) || strlen($_name < 3)) {
            throw new Exception('Il nome deve contenere almeno 3 caratteri');
        }

        $this->name = $_name;
        $this->image = $_image;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->species = $_species;
        $this->description = $_description;
        $this->category = $_category;
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
