<?php

include __DIR__ . '/data/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>My PetShop</title>
</head>

<body>
    <header class="container pt-5">
        <h1>My PetShop</h1>
    </header>
    <main class="pt-3">
    <div class="container">
                <div class="row">
                    <?php foreach($products as $product){ ?> 
                    <div class="col-4 gy-3">
                        <div class="card position-relative">
                            <div class="position-absolute mt-3 me-3 end-0"><?php echo $product->category->icon ?></div>
                            <div class="img-box">
                            <img src="<?php echo $product->image ?>" class="img-fluid p-3" alt="<?php echo $product->name ?>">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                <h4 class="card-title"><?php echo $product->name ?></h4>
                                <p class="fs-3"><?php echo "{$product->price}&euro;" ?></p>
                                </div>
                                <div class="card-text">
                                Categoria: <?php echo "{$product->type}";?>
                            </div>
                            </div>
                           
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
    </main>
</body>

</html>

<style>
    .fa-dog {
        background-color: #48a259;
    }

    .fa-paw {
        background-color: #fd3b27;
    }

    .fa-cat {
        background-color: #02c4d8;
    }
</style>