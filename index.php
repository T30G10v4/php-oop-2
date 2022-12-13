<?php 

    require_once __DIR__ . "/Models/Product.php";
    require_once __DIR__ . "/Models/Food.php";
    require_once __DIR__ . "/Models/Game.php";
    require_once __DIR__ . "/Models/Kennel.php";

    $ciappi = new Food("Ciappi", "grey", 9.99, 500);
    $tiragraffi = new Game("Tiragraffi", "white", 29.99, "Canapa");
    $castello = new Kennel("Castello", "blue", 69.99, 30);

    $products = [$ciappi, $tiragraffi, $castello];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h1>I TUOI PRODOTTI</h1>
    <div class="container">
        <div class="row row-cols-4">
            <?php foreach ($products as $prod) { ?>
                <div class="card">
    
                    <div class="card-body">
                        <h5 class="card-title"> <?php 
                                                    echo $prod->name;
                                                    var_dump($prod->name);
                                                 ?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>   
</body>
</html>