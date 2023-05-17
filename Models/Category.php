<?php 

class Category{
    public
    $icon, $category;
    public function __construct(string $icon, string $category){
        $this->icon = $icon;
        $this->category = $category;
    }
}