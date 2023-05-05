<?php

require_once __DIR__ . '/Product.php';

class Accessory extends Product
{
  public $material;
  public $size;

  public function __construct( String $_name, Float $_price, String $_image, Category $_category)
  {
    $this->material = $_material;
    $this->size = $_size;
  }
}