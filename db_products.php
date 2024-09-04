<?php
require_once __DIR__ . '/Dog_product.php';
require_once __DIR__ . '/Cat_product..php';

$db_products = [
    //PRODOTTI PER CANI 
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

    //PRODOTTI PER GATTI 
    new Cat_product('Royal Canin Indoor Adult', 'Cibo secco', '€30,00 (2 kg)'),
    new Cat_product('Whiskas Jelly','Cibo umido', '€12,00 (12 confezioni da 100g'),
    new Cat_product('Trixie Catnip Spray','Gioco e intrattenimento','€7,50 (100 ml)'),
    new Cat_product('Collare Regolabile per Gatti','Accessori','€9,00'),
    new Cat_product('Scratch Lounge','Accessori per il gioco','€25,00'),
    new Cat_product('PetFusion Cat Litter Mat',' Accessori per la lettiera','€19,99'),
    new Cat_product('Catit Flower Fountain','Accessori per l’alimentazione','€26,00'),
    new Cat_product('Furminator DeShedding Tool','Cura e grooming','€15,99'),
    new Cat_product('Bergan Turbo Scratcher','Gioco e intrattenimentoi','€17,50'),
    new Cat_product('Feliway Classic Diffuser','Benessere e comodità','€30,00'),
  
];
var_dump($db_products);
?>