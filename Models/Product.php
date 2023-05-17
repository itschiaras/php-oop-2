<?php

class Product {
    public $name;
    public $price;
    public $image;
    public $category = 'miscellaneous';

    public function __construct($name, $price, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }
}