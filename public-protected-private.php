<?php

class Visi{
//    public $pubVar = "public variable";
//    private $priVar = "private variable";
//    protected $protVar = "protected Varable";

    public $pubVar;
    private $priVar;
    protected $protVar;

   public function pubFun() {
    echo "This is public function";
   }

   private function priFun() {
    echo "This is private function";
   }

   protected function protFun() {
    echo "This is protected function";
   }
}

$visi = new Visi;

// echo $visi -> pubVar;
// echo "<br>";
// $visi -> pubFun(); 

// var_dump($visi->pubVar = "public variable");
// var_dump($visi -> priVar );

// var_dump($visi->protVar);

// var_dump($visi->pubFun());
// var_dump($visi->priFun());

// var_dump($visi->protFun());
