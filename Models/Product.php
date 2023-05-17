<?php

class Product {
    public $name;
    public $price;
    public $image;
    public $category = 'Prodotto';

    public function __construct($name, $price, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }
}