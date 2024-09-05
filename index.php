<?php 
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Consumer.php';
require_once __DIR__ . '/db_products.php';


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
    
        <div class="container text-start">
            <div class="row justify-content-md-cente">
            <?php foreach($Products as $product): ?>
                <div class="col-3 card m-3">
                    <div> Name: <?php echo $product->name ?> </div>
                    <div> Categoria: <?php echo $product->category ?> </div>
                    <div> Prezzo: <?php echo $product->price ?> </div>
                    <div> Descrizione: <?php echo $product->description ?>  </div>
                    <div> Animali:</div>
                    <ul>
                        <?php foreach($product->consumer as $animal):?>
                            <li>
                            <?php echo $animal ?>
                            </li>
                        <?php endforeach ;?>
                    </ul>
                </div>
                <?php endforeach ;?>
            </div>
        </div>
  


    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
