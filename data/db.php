<?php

require_once __DIR__ . '/../Model/Product.php';
require_once __DIR__ . '/../FoodProduct.php';
require_once __DIR__ . '/../BedProduct.php';
require_once __DIR__ . '/../ToyProduct.php';
require_once __DIR__ . '/../Model/Category.php';




$db = [
    new FoodProduct('Crocchette per cani', 'https://m.media-amazon.com/images/I/61QIFZXfyIL._AC_SL1500_.jpg', 'Amazon', 31.00, ['cani'], 'Cibo per cani adulti', new Category('Cani', '<i class="fa-solid fa-dog"></i>'), ['carne di manzo', 'sale', 'olio', 'aromi vegetali']),
    new FoodProduct('Crocchette per gatti', 'https://m.media-amazon.com/images/I/71uRyeNLHmL._AC_SL1500_.jpg', 'Purina One', 38.00, ['gatti'], 'Crocchette per gatti indoor', new Category('Gatti', '<i class="fa-solid fa-cat"></i>'), ['carne di pollo', 'sali minerali', 'aromi vegetali']),
    new FoodProduct('Scatolette per gatti', 'https://m.media-amazon.com/images/I/81iUD1TndFL._AC_SL1500_.jpg', 'Purina Gold', 24.00, ['gatti'], 'Cibo per gatti adulti Purina Gourmet Gold Mousse con pesce dell’oceano',  new Category('Gatti', '<i class="fa-solid fa-cat"></i>'), ['pesce', 'proteine vegetali', 'sostanze minerali']),
    new BedProduct('Lettino rialzato', 'https://m.media-amazon.com/images/I/61hBb9nFtxS._AC_SL1500_.jpg', 'Amazon', 24.54, ['gatti'], 'Questo lettino rialzato aiuta gli animali domestici a stare al fresco e comodi, promuovendo un maggiore flusso dell’aria e riducendo la pressione sulle articolazioni', new Category('Gatti, Cani', '<i class="fa-solid fa-cat"></i>, <i class="fa-solid fa-dog"></i>'), 'small'),
    new BedProduct('Letto Grotta', 'https://m.media-amazon.com/images/I/61wRoGk9I8L._AC_SL1500_.jpg', 'Galate', 32.24, ['gatti'], 'Casetta per gatti di design 2 in 1: le case per gatti sono disponibili in due forme. Lo stile igloo consente al tuo gatto di nascondersi e sentirsi al sicuro', new Category('Gatti', '<i class="fa-solid fa-cat"></i>'), 'medium'),
    new ToyProduct('Palla con luce LED', 'https://m.media-amazon.com/images/I/71vvAwH93+L._AC_SL1500_.jpg', 'Iokheira', 12.99, ['gatti'], 'Gioco per gatti, palla autoruotante 360, elettrica, a due colori, gioco innovativo, ricaricabile', new Category('Gatti', '<i class="fa-solid fa-cat"></i>'), 'silicone'),
    new ToyProduct('Corda da gioco', 'https://m.media-amazon.com/images/I/71MxWPeyBaL._AC_SL1500_.jpg', 'Trixie', 3.49, ['cani'], 'Giocattolo corda da gioco in puro cotone', new Category('Cani', '<i class="fa-solid fa-dog"></i>'), 'cotone'),
    new ToyProduct('Palla con luce LED', 'https://m.media-amazon.com/images/I/71vvAwH93+L._AC_SL1500_.jpg', 'Iokheira', 12.99, ['gatti'], 'Gioco per gatti, palla autoruotante 360, elettrica, a due colori, gioco innovativo, ricaricabile', new Category('Gatti', '<i class="fa-solid fa-cat"></i>'), 'silicone'),


];

// Variabile per accedere al prodotto creato
// $product = $db[0];

// Stampa le informazioni del prodotto utilizzando var_dump
// var_dump($product->getFullInfo());

// var_dump($db);
