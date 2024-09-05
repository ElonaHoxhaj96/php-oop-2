<?php
require_once __DIR__ . '/Consumer.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/db_products.php';

$Consumers = [
    new Consumer('Cane', 'Taglia piccola','8kg'),
    new Consumer('Cane', 'Taglia Media','10kg'),
    new Consumer('Cane', 'Taglia Grande','15kg'),
    new Consumer('Gatto', 'Taglia piccola','5kg'),
];

$dog = $Consumers[0];
$cat = $Consumers[3];
$Products = [
    //PRODOTTI PER CANI 
    new Product('Crocchette Per Cani Adulti', 'Alimentazione','€50,00 (12 kg)','nidofnjsduenj kkdnsjj jdk jf  ', $dog),
    new Product('Cibo Umido per Cani','Alimentazione', '€1,50 (400 g)','nidofnjsduenj kkdnsjj jdk jf', $dog),
    new Product('Guinzaglio in Nylon','Accessori','€15,00','nidofnjsduenj kkdnsjj jdk jf  ', $dog),
    new Product('Collare Regolabile','Accessori',' €10,00','nidofnjsduenj kkdnsjj jdk jf  ', $dog),
    new Product('Pettorina per Cani','Accessori','€25,00','nidofnjsduenj kkdnsjj jdk jf  ', $dog),
    new Product('Giocattolo in Gomma','Giocattoli',' €8,00','nidofnjsduenj kkdnsjj jdk jf  ', $dog),
    new Product('Pettine per Cani','Toelettatura','€5,00','nidofnjsduenj kkdnsjj jdk jf  ', $dog),
    new Product('Shampoo per Cani','Toelettatura','€12,00 (250 ml)','nidofnjsduenj kkdnsjj jdk jf  ', $dog),
    new Product('Cuscino per Cani','Letti e Accessori','€35,00','nidofnjsduenj kkdnsjj jdk jf  ', $dog),
    new Product('Trasportino per Cani','Trasporto',' €70,00','nidofnjsduenj kkdnsjj jdk jf  ', $dog),

    //PRODOTTI PER GATTI 
    new Product('Royal Canin Indoor Adult', 'Cibo secco', '€30,00 (2 kg)','nidofnjsduenj kkdnsjj jdk jf  ', $cat),
    new Product('Whiskas Jelly','Cibo umido', '€12,00 (12 confezioni da 100g','nidofnjsduenj kkdnsjj jdk jf  ', $cat),
    new Product('Trixie Catnip Spray','Gioco e intrattenimento','€7,50 (100 ml)','nidofnjsduenj kkdnsjj jdk jf  ', $cat),
    new Product('Collare Regolabile per Gatti','Accessori','€9,00','nidofnjsduenj kkdnsjj jdk jf  ', $cat),
    new Product('Scratch Lounge','Accessori per il gioco','€25,00','nidofnjsduenj kkdnsjj jdk jf  ', $cat),
    new Product('PetFusion Cat Litter Mat',' Accessori per la lettiera','€19,99','nidofnjsduenj kkdnsjj jdk jf  ', $cat),
    new Product('Catit Flower Fountain','Accessori per l alimentazione','€26,00','nidofnjsduenj kkdnsjj jdk jf  ', $cat),
    new Product('Furminator DeShedding Tool','Cura e grooming','€15,99','nidofnjsduenj kkdnsjj jdk jf  ', $cat),
    new Product('Bergan Turbo Scratcher','Gioco e intrattenimentoi','€17,50','nidofnjsduenj kkdnsjj jdk jf  ', $cat),
    new Product('Feliway Classic Diffuser','Benessere e comodità','€30,00','nidofnjsduenj kkdnsjj jdk jf  ', $cat),
  
];

?>