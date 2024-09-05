<?php 

class Consumer {
    public $animal;
    public $size;
    public $weight;

    public function __construct($_animal, $_size, $_weight)
    {
        $this->animal = $_animal;
        $this->size = $_size;
        $this->weight = $_weight;
      
    }

};

?>