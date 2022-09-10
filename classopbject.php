<?php

class drinks {
  public $name = "shark";
  public $price = 300;   

//   public $name;
//   public $price;

  function setName($name){
    $this->name = $name;
  }

  function setPrice($price) {
    $this-> price = $price;
  }

  function getPrice(){
    echo $this -> price;
  }

  function getName() {
    echo $this -> name;
  }

}


$drink = new drinks();
// $drink->getName();
// echo "<br>";
// $drink->getPrice();

// $drink -> setName("U Kaung Myint");
// $drink -> getName();

// $drink -> setPrice("232");
// echo "<br>";
// print_r("<pre>");
// print_r($drink);

// $drink-> getPrice();


echo $drink->name;
echo "<br>";
echo $drink->price;