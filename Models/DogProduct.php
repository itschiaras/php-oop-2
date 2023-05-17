<?php

class DogProduct extends Product {
    public $category = "dog";
    public $type;

    public function __construct($name, $price, $type, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->type = $type;
    }
}