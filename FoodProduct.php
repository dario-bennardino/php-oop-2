<?php
require_once __DIR__ . '/Model/Product.php';

//nome classe figlio estende nome classe madre

class FoodProduct extends Product
{
    public $ingredients;

    //ricreo il costruttore gemello della classe genitore con in più (opzionale) le sue proprietà
    function __construct(string $_name, string $_image, string $_brand, float $_price, array $_species, string $_description, Category $_category, array $_ingredients)
    {
        //eredito il costruttore del genitore
        //con parent si accede ai metodi/proprietà del genitore
        parent::__construct($_name, $_image, $_brand, $_price, $_species, $_description, $_category);

        //inoltre gestisco i dati specifici del figlio
        $this->ingredients = $_ingredients;
    }

    public function getFullIngredients()
    {
        return implode(', ', $this->ingredients);
    }
}
