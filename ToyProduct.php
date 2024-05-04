<?php
require_once __DIR__ . '/Model/Product.php';

class ToyProduct extends Product
{
    public $materials;

    function __construct(string $_name, string $_brand, float $_price, array $_species, string $_description, string $_materials)
    {
        parent::__construct($_name, $_brand, $_price, $_species, $_description);

        $this->materials = $_materials;
    }
}
