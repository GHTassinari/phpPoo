<?php

class Product {
    public string $name;
    public int $value;

    function __construct($name, $value){
        $this->name = $name;
        $this->value = $value;
    }
}

class Cart {
    public $products;

    public function add(Product $product){
        $this->products[] = $product;
    }

    public function show() {
        foreach ($this->products as $product){
            echo $product->name . '<br>';
            echo $product->value . '<hr>';
        }
    }
}

$product1 = new Product("Laptop", 1500);
$product2 = new Product("Mouse", 50);

$cart = new Cart();
$cart->add($product1);
$cart->add($product2);
$cart->show();

?>