<?php 
require_once __DIR__ . '/Consumer.php';
class Product{
    public $name;
    public $category;
    public $price;
    public $description;
    public $consumer;

    public function __construct(string $_name, string $_category, float $_price, string $_description, Consumer $_consumer)
    {
        $this->name = $_name;
        $this->category= $_category;
        $this->price = $_price;
        $this->description = $_description;
        $this->consumer = $_consumer;
    }
}


?>