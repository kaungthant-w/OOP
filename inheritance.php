<?php

class Drink {
    public $name = "Juice";
    public $price = 300;
    public $des = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro autem amet adipisci officia excepturi. Beatae id iste aliquid voluptas quae? Ducimus ipsum sequi, placeat sint autem corporis nam aut rem.";
    
    public function setPrice($price) {
        $this->price = $price;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName(){
        echo $this->name;
    }

    public function getPrice(){
        echo $this -> price;
    }
}

class Food extends Drink {

}

// $drinks = new Drink;

$food = new Food;
$food->setPrice(223);
$food->setName("keyboard");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <img src="img/1596895243537.jpg" class="img-thumbnail mb-3" alt="">
                <h1><?php $food->getName(); ?></h1>
                <h2><?php $food->getPrice(); ?>$</h1>
                <p><?php echo $food->des; ?></p>
                
                <div class="mt-3 mb-5">
                    <button class="btn btn-success">Buy</button>
                    <button class="btn btn-warning">Check Out</button>
                </div>
            </div>

            <div class="col">
                <img src="img/1596895243537.jpg" class="img-thumbnail mb-3" alt="">
                <h1><?php $food->getName(); ?></h1>
                <h2><?php $food->getPrice(); ?>$</h1>
                <p><?php echo $food->des; ?></p>
                
                <div class="mt-3 mb-5">
                    <button class="btn btn-success">Buy</button>
                    <button class="btn btn-warning">Check Out</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>