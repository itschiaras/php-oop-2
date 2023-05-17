<?php

class DogProduct extends Product {
    public $category = "dog";

    public function __construct($name, $price, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }
}