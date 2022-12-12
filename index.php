<?php

require __DIR__ . '/product.php';

$croccantini = new product("cibo", 8, "Royal canin", "royal cane.jpeg", new Category(true));

$cucciaRosa = new product("Cucce", 24.99, "Cuccia Rosa Morbida", "cuccia rosa.jpg", new Category(false));

$tiragraffi = new product("Giochi", 18.49, "Tiragraffi blu per gatto", "tiragraffi.jpg", new Category(false));







// var_dump($croccantini);
// var_dump($croccantini->icon->icon);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <div class="  mb-5 text-center  ">

        <h1 class=" mb-5 text-secondary">Animal Shop</h1>


        <div class="container d-flex justify-content-center">


            <div class="col card mx-3">
                <img src="./img/<?= $croccantini->img ?>" class="card-img-top" alt="...">
                <div class="d-flex align-items-end">
                    <div class="card-body ">
                        <img src="./img<?= $croccantini->icon->icon ?>" class="img-fluid w-25" alt="">
                        <h5 class="card-title"><?= $croccantini->title ?></h5>
                        <h5 class="card-title"><?= $croccantini->price ?> &euro;</h5>
                        <p class="card-text ">Tra gli oggetti di tipo: <?= $croccantini->type ?></p>
                        <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                    </div>
                </div>

            </div>



            <div class="col mx-3 card">

                <img src="./img/<?= $cucciaRosa->img ?>" class="card-img-top " alt="...">
                <div class="d-flex align-items-end">
                    <div class="card-body ">
                        <img src="./img<?= $cucciaRosa->icon->icon ?>" class="img-fluid w-25" alt="">
                        <h5 class="card-title"><?= $cucciaRosa->title ?></h5>
                        <h5 class="card-title"><?= $cucciaRosa->price ?> &euro;</h5>
                        <p class="card-text ">Tra gli oggetti di tipo: <?= $cucciaRosa->type ?></p>
                        <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                    </div>
                </div>

            </div>

            <div class="col card mx-3">

                <img src="./img/<?= $tiragraffi->img ?>" class="card-img-top " alt="...">
                <div class="d-flex align-items-end">
                    <div class="card-body ">
                        <img src="./img<?= $tiragraffi->icon->icon ?>" class="img-fluid w-25" alt="">
                        <h5 class="card-title"><?= $tiragraffi->title ?></h5>
                        <h5 class="card-title"><?= $tiragraffi->price ?> &euro;</h5>
                        <p class="card-text ">Tra gli oggetti di tipo: <?= $tiragraffi->type ?></p>
                        <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                    </div>
                </div>



            </div>



            <div class="prodotto3">

            </div>

        </div>
    </div>




    </div>





</body>

</html>