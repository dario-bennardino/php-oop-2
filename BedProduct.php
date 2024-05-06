<?php
require_once __DIR__ . '/Model/Product.php';

class BedProduct extends Product
{
    public $size;

    function __construct(string $_name, string $_image, string $_brand, float $_price, array $_species, string $_description, Category $_category, string $_size)

    {
        parent::__construct($_name, $_image, $_brand, $_price, $_species, $_description, $_category);

        $this->size = $_size;
    }
}
