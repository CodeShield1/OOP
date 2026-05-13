<?php

class Laptop{
    public $brand ;
    public $ram;
    public $price;


    public function __construct($brand , $ram , $price){
      $this->brand=$brand;
      $this->ram=$ram;  
      $this->price=$price;  
    }

    public function showInfo() {
      echo "brand : $this->brand <br>";
      echo "ram   : $this->ram <br>";
      echo "price : $this->price <br>";
      echo "<br>";

    }
}

$dell= new Laptop("Dell",16,9000);
$hp= new Laptop("Hp",16,9000);


$dell->showInfo();
$hp->showInfo();

