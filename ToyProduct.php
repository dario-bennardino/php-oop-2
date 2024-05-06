<?php
require_once __DIR__ . '/Model/Product.php';

class ToyProduct extends Product
{
    public $materials;

    function __construct(string $_name, string $_image, string $_brand, float $_price, array $_species, string $_description, Category $_category, string $_materials)
    {
        parent::__construct($_name, $_image, $_brand, $_price, $_species, $_description, $_category);

        $this->materials = $_materials;
    }
}
