<?php 
require_once __DIR__ . '/Dog_product.php';
require_once __DIR__ . '/Cat_product.php';
require_once __DIR__ . '/db_products.php';
require_once __DIR__ . '/./DISCOUNT/Discount.php'


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- BOOTSTRAP -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php foreach($db_products as $product): ?>
        <div class="card d-flex flex-row inline" style="width: 18rem;">
        <div class="card-body">
            <p class="card-text">Nome Prodotto: <?php echo $product->name?> </p>
            <p class="card-text">Categoria: <?php echo $product->category ?> </p>
            <p class="card-text">Prezzo: <?php echo $product->price ?> </p>
            <p class="card-text">Sconto: <?php echo $product->discount ?? '-' ?> </p>

        </div>
        </div>
    <?php endforeach ;?>


    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>