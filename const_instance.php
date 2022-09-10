<?php

class Drinks {
    const constString = "It is a const variable.";

    function constFun () {
        // echo "It is a const function.";
        echo self::constString;
    }

    static $staticVar = "It is Static Variable.";

    static function staticFun() {
        echo "It is a static function.";
    }
    
}

// echo Drinks::constString;
$drink = new Drinks;
$drink ->constFun();

echo "<br>";
echo drinks::$staticVar;
echo "<br>";
Drinks::staticFun();