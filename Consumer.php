<?php 

class Consumer {
    public $animal;
    public $age;
    public $weight;

    public function __construct($_animal, $_age, $_weight)
    {
        $this->animal = $_animal;
        $this->age = $_age;
        $this->weight = $_weight;
      
    }

};

?>