<?php

require_once __DIR__ . '/../Model/Product.php';
require_once __DIR__ . '/../FoodProduct.php';

$db = [
    new FoodProduct('Crocchette per cani', 'Amazon', 31.00, ['cani'], 'Cibo per cani adulti', ['carne di manzo', 'sale', 'olio', 'aromi vegetali']),
    new FoodProduct('Crocchette per gatti', 'Purina One', 38.00, ['gatti'], 'Crocchette per gatti indoor', ['carne di pollo', 'sali minerali', 'aromi vegetali']),
    new FoodProduct('Scatolette per gatti', 'Purina Gold', 24.00, ['gatti'], 'Cibo per gatti adulti Purina Gourmet Gold Mousse con pesce dell’oceano', ['pesce', 'proteine vegetali', 'sostanze minerali'])

];

// Variabile per accedere al prodotto creato
$product = $db[0];

// Stampa le informazioni del prodotto utilizzando var_dump
var_dump($product->getFullInfo());

var_dump($db);
