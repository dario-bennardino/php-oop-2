<?php

require_once __DIR__ . '/../Model/Product.php';
require_once __DIR__ . '/../FoodProduct.php';

$db = [
    new FoodProduct('Crocchette per cani', 'Amazon', 31.00, ['cani'], 'Cibo per cani adulti', ['carne di manzo', 'sale', 'olio', 'aromi vegetali'])
];

// Variabile per accedere al prodotto creato
$product = $db[0];

// Stampa le informazioni del prodotto utilizzando var_dump
var_dump($product->getFullInfo());
