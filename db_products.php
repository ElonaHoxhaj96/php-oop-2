<?php
require_once __DIR__ . '/Dog_product.php';
require_once __DIR__ . '/Cat_product.php';
require_once __DIR__ . '/DISCOUNT/Discount.php';


$db_products = [
    //PRODOTTI PER CANI 
    new Product('Crocchette Per Cani Adulti', 'Alimentazione', '€50,00 (12 kg)', '20%'),
    new Product('Cibo Umido per Cani','Alimentazione', '€1,50 (400 g)'),
    new Product('Guinzaglio in Nylon','Accessori','€15,00'),
    new Product('Collare Regolabile','Accessori',' €10,00', '30%'),
    new Product('Pettorina per Cani','Accessori','€25,00'),
    new Product('Giocattolo in Gomma','Giocattoli',' €8,00', '15%'),
    new Product('Pettine per Cani','Toelettatura','€5,00'),
    new Product('Shampoo per Cani','Toelettatura','€12,00 (250 ml)'),
    new Product('Cuscino per Cani','Letti e Accessori','€35,00'),
    new Product('Trasportino per Cani','Trasporto',' €70,00', '15%'),

    //PRODOTTI PER GATTI 
    new Product('Royal Canin Indoor Adult', 'Cibo secco', '€30,00 (2 kg)'),
    new Product('Whiskas Jelly','Cibo umido', '€12,00 (12 confezioni da 100g'),
    new Product('Trixie Catnip Spray','Gioco e intrattenimento','€7,50 (100 ml)'),
    new Product('Collare Regolabile per Gatti','Accessori','€9,00'),
    new Product('Scratch Lounge','Accessori per il gioco','€25,00'),
    new Product('PetFusion Cat Litter Mat',' Accessori per la lettiera','€19,99'),
    new Product('Catit Flower Fountain','Accessori per l’alimentazione','€26,00'),
    new Product('Furminator DeShedding Tool','Cura e grooming','€15,99'),
    new Product('Bergan Turbo Scratcher','Gioco e intrattenimentoi','€17,50'),
    new Product('Feliway Classic Diffuser','Benessere e comodità','€30,00'),
  
];

?>