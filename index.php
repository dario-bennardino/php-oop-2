<?php
require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/data/db.php';
require_once __DIR__ . '/BedProduct.php';
require_once __DIR__ . '/FoodProduct.php';
require_once __DIR__ . '/ToyProduct.php';
require_once __DIR__ . '/Model/Category.php';

// filtro l'array generale dei prodotti in base alla classe separando quindi cibo, giochi, accessori e che siano disponibili
$FoodProduct = array_filter($db, fn ($product) => get_class($product) === 'FoodProduct');

$ToyProduct = array_filter($db, fn ($product) => get_class($product) === 'ToyProduct');

$BedProduct = array_filter($db, fn ($product) => get_class($product) === 'BedProduct');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="./CSS/style.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- HEADER -->
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Boolzon</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Invia a</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Cani</a></li>
                                <li><a class="dropdown-item" href="#">Gatti</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Sale</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- MAIN -->
    <main>
        <div class="container">
            <!-- <h1 class="text-center my-4">Shop Online</h1> -->
            <div class="row row-cols-4 ">


                <!-- <?php foreach ($db as $product) : ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $product->image ?>" class="card-img-top" alt="<?php echo $product->name; ?>">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $product->name; ?></h5>
                            <p class="card-text"> <?php echo $product->description; ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"> <?php echo $product->brand; ?> </li>
                            <li class="list-group-item">€ <?php echo $product->price; ?></li>
                            <li class="list-group-item">Adatto per: <?php echo $product->getFullSpecies(); ?></li>
                            <li class="list-group-item">Ingredienti: </li>
                            <li class="list-group-item">Dimensione: <?php echo $product->size ?? '-'; ?></li>
                            <li class="list-group-item">Materiale: <?php echo $product->materials ?? '-'; ?></li>
                            <li class="list-group-item"><?php $species = $product->getFullSpecies();
                                                        if ($species === 'gatti') {
                                                            echo '<i class="fas fa-cat"></i>';
                                                        } elseif ($species === 'cani') {
                                                            echo '<i class="fas fa-dog"></i>';
                                                        } elseif ($species === 'cani, gatti') {
                                                            echo '<i class="fas fa-cat"></i> <i class="fas fa-dog"></i>';
                                                        }
                                                        ?>
                            </li>

                        </ul>
                    </div>
                <?php endforeach; ?>
              -->

                <?php foreach ($FoodProduct as $item) : ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $item->image ?>" class="card-img-top" alt="<?php echo $item->name; ?>">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $item->name; ?></h5>
                            <p class="card-text"> <?php echo $item->description; ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"> <?php echo $item->brand; ?> </li>
                            <li class="list-group-item">€ <?php echo $item->price; ?></li>
                            <li class="list-group-item"> <?php echo $item->category->icon; ?></li>
                            <li class="list-group-item">Ingredienti: </li>
                            <li class="list-group-item">Dimensione: <?php echo $item->size ?? '-'; ?></li>
                            <li class="list-group-item">Materiale: <?php echo $item->materials ?? '-'; ?></li>
                        </ul>
                    </div>
                <?php endforeach; ?>


                <?php foreach ($ToyProduct as $item) : ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $item->image ?>" class="card-img-top" alt="<?php echo $item->name; ?>">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $item->name; ?></h5>
                            <p class="card-text"> <?php echo $item->description; ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"> <?php echo $item->brand; ?> </li>
                            <li class="list-group-item">€ <?php echo $item->price; ?></li>
                            <li class="list-group-item"> <?php echo $item->category->icon; ?></li>
                            <li class="list-group-item">Ingredienti: </li>
                            <li class="list-group-item">Dimensione: <?php echo $item->size ?? '-'; ?></li>
                            <li class="list-group-item">Materiale: <?php echo $item->materials ?? '-'; ?></li>
                        </ul>
                    </div>
                <?php endforeach; ?>

                <?php foreach ($BedProduct as $item) : ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $item->image ?>" class="card-img-top" alt="<?php echo $item->name; ?>">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $item->name; ?></h5>
                            <p class="card-text"> <?php echo $item->description; ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"> <?php echo $item->brand; ?> </li>
                            <li class="list-group-item">€ <?php echo $item->price; ?></li>
                            <li class="list-group-item"> <?php echo $item->category->icon; ?></li>
                            <li class="list-group-item">Ingredienti: </li>
                            <li class="list-group-item">Dimensione: <?php echo $item->size ?? '-'; ?></li>
                            <li class="list-group-item">Materiale: <?php echo $item->materials ?? '-'; ?></li>
                        </ul>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row row-cols-4">
                <div class="col text-white">
                    Chi siamo
                </div>
                <div class="col text-white">
                    Contatti
                </div>
                <div class="col text-white">
                    Aiuto
                </div>
                <div class="col text-white">
                    Condizioni generali vendita
                </div>




            </div>
        </div>
    </footer>

    <script src="/js/script.js"></script>
</body>

</html>