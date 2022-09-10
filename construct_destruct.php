<?php

class drinks {
    public function __construct($name, $price) {
        $this -> name = $name;
        $this -> price = $price;

    }

    function __destruct()
    {
        echo "destruct";
    }

    function getPrice() {
        echo $this->price."<br>";
    }

    function getName() {
        echo $this->name."<br>";
    }
}


$drink = new drinks("cocacola", 320);

echo "<br>";
$drink -> getPrice();
$drink -> getName();