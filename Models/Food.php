<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
  public $weight;
  public $ingredients;
  public $taste;

  public function __construct( String $_name, Float $_price, String $_image, Category $_category)
  {
    parent::__construct($_name, $_price, $_image, $_category);



 
  }
}