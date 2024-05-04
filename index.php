<?php
require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/data/db.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center my-4">Shop Online</h1>
        <div class="row row-cols-4 ">
            <?php foreach ($db as $product) : ?>
                <div class="card" style="width: 18rem;">
                    <img src="https://m.media-amazon.com/images/I/71MxWPeyBaL._AC_SL1500_.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $product->name; ?></h5>
                        <p class="card-text"> <?php echo $product->description; ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <?php echo $product->brand; ?> </li>
                        <li class="list-group-item"><?php echo $product->price; ?></li>
                        <li class="list-group-item">Adatto per: <?php echo $product->getFullSpecies(); ?></li>
                        <li class="list-group-item">Ingredienti </li>
                        <li class="list-group-item">Materiale: </li>
                        <li class="list-group-item"> size</li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</body>

</html>