<?php

class Product {
    public $name;
    public $price;
    public function __construct($name){
        $this->name = $name;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }
}

$product1 = new Product('Koelkast');
$product2 = new Product('Droger');
$product3 = new Product('Wasmachine');

$product1->setPrice($_POST['prijs1']);
$product2->setPrice($_POST['prijs2']);
$product3->setPrice($_POST['prijs3']);

echo "Datum: " . (new DateTime())->format('d-n-Y') . "<br>";
echo $product1->name . ": €" . $product1->price . "<br>";
echo $product2->name . ": €" . $product2->price . "<br>";
echo $product3->name . ": €" . $product3->price . "<br>";

$exbtw = $product1->price + $product2->price + $product3->price;
$incbtw = $exbtw * 0.21 + $exbtw;

echo "Totaalprijs exclusief BTW: €" . $exbtw . "<br>";
echo "Totaalprijs inclusief BTW: €" . $incbtw;