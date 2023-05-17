<?php 
include_once __DIR__ . '/Product.php';

class ClothesProduct extends Product
{
    public
    $size, $color, $type = 'Abbigliamento';
    public function __construct(string $name, Category $category, float $price, string $image){
        parent::__construct($name, $category, $price, $image);
    } 
}