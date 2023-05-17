<?php 
include_once __DIR__ . '/Product.php';

class ToyProduct extends Product
{
    public
    $weight, $dimension, $material, $color, $indoor_outdoor, $type = 'Giocattoli';
    public function __construct(string $name, Category $category, float $price, string $image){
        parent::__construct($name, $category, $price, $image);
    } 
}