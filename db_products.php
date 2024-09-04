<?php
require_once __DIR__ . '/Dog_product.php';
require_once __DIR__ . '/Cat_product..php';

$db_products = [
    new Dog_product('Crocchette Per Cani Adulti', 'Alimentazione', '€50,00 (12 kg)'),
    new Dog_product('Cibo Umido per Cani','Alimentazione', '€1,50 (400 g)'),
    new Dog_product('Guinzaglio in Nylon','Accessori','€15,00'),
    new Dog_product('Collare Regolabile','Accessori',' €10,00'),
    new Dog_product('Pettorina per Cani','Accessori','€25,00'),
    new Dog_product('Giocattolo in Gomma','Giocattoli',' €8,00'),
    new Dog_product('Pettine per Cani','Toelettatura','€5,00'),
    new Dog_product('Shampoo per Cani','Toelettatura','€12,00 (250 ml)'),
    new Dog_product('Cuscino per Cani','Letti e Accessori','€35,00'),
    new Dog_product('Trasportino per Cani','Trasporto',' €70,00'),
];
