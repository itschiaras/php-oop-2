<?php 
include_once __DIR__ . '/Product.php';
include_once __DIR__.'/../Traits/Weightable.php';

class FoodProduct extends Product
{

    use Weightable; 
    
    public
    $diet, $kind_of_food, $age, $ingredients, $type = 'Cibo';
    public function __construct(string $name, Category $category, float $price, string $image){
        parent::__construct($name, $category, $price, $image);
        
    } 
}