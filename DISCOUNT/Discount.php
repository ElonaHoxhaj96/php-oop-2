<?php
class Discount extends Dog_product{
    public $discount;

    function __construct(string $_name, string $_category,float $_price,  $_discount)
    {
        parent ::__construct($_name, $_category, $_price);

        $this->discount = $_discount;
    }

    //creo una funzione per lo sconto 
    // public function discount() {
    //     // Controlla se lo sconto è impostato e ha valore
    //     if ($this->discount !== null && $this->discount > 0) {
    //         // Restituisce il valore dello sconto
    //         return $this->discount;
    //     } else {
    //         // Restituisce "none" se non è presente uno sconto
    //         return "none";
    //     }
    // }
}
?>

