<?php

require_once __DIR__ . '/Category.php';
class Product{

  
    public $name;
    public $price;
    public $image;
    public $category;
    protected $discount = 0;

    public function __construct( String $_name, Float $_price, String $_image, Category $_category)
  {
    
    $this->name = $_name;
    $this->price = $_price;
    $this->image = $_image;
    $this->category = $_category;
  }

}