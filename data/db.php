<?php

require_once __DIR__ . '/../Model/Product.php';
require_once __DIR__ . '/../FoodProduct.php';
require_once __DIR__ . '/../BedProduct.php';
require_once __DIR__ . '/../FoodProduct.php';
require_once __DIR__ . '/../ToyProduct.php';




$db = [
    new FoodProduct('Crocchette per cani', 'Amazon', 31.00, ['cani'], 'Cibo per cani adulti', ['carne di manzo', 'sale', 'olio', 'aromi vegetali']),
    new FoodProduct('Crocchette per gatti', 'Purina One', 38.00, ['gatti'], 'Crocchette per gatti indoor', ['carne di pollo', 'sali minerali', 'aromi vegetali']),
    new FoodProduct('Scatolette per gatti', 'Purina Gold', 24.00, ['gatti'], 'Cibo per gatti adulti Purina Gourmet Gold Mousse con pesce dell’oceano', ['pesce', 'proteine vegetali', 'sostanze minerali']),
    new BedProduct('Lettino rialzato', 'Amazon', 24.54, ['cani', 'gatti'], 'Questo lettino rialzato aiuta gli animali domestici a stare al fresco e comodi, promuovendo un maggiore flusso dell’aria e riducendo la pressione sulle articolazioni', 'small'),
    new BedProduct('Letto Grotta', 'Galate', 32.24, ['gatti'], 'Casetta per gatti di design 2 in 1: le case per gatti sono disponibili in due forme. Lo stile igloo consente al tuo gatto di nascondersi e sentirsi al sicuro', 'medium'),
    new ToyProduct('Palla con luce LED', 'Iokheira', 12.99, ['gatti'], 'Gioco per gatti, palla autoruotante 360, elettrica, a due colori, gioco innovativo, ricaricabile', 'silicone'),
    new ToyProduct('Corda da gioco', 'Trixie', 3.49, ['cani'], 'Giocattolo corda da gioco in puro cotone', 'Cotone'),
    new ToyProduct('Palla con luce LED', 'Iokheira', 12.99, ['gatti'], 'Gioco per gatti, palla autoruotante 360, elettrica, a due colori, gioco innovativo, ricaricabile', 'silicone'),


];

// Variabile per accedere al prodotto creato
$product = $db[0];

// Stampa le informazioni del prodotto utilizzando var_dump
// var_dump($product->getFullInfo());

// var_dump($db);
