<?php 
include_once __DIR__ .'/Category.php';

class Product
{
    public
    $name, $category, $price, $image, $type = 'Altro';

    public function __construct(string $name, Category $category, float $price, string $image){
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->image = $image;
    }

}