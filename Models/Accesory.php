<?php

require_once __DIR__ . '/Product.php';

class Accessory extends Product
{

  public function __construct( String $_name, $_price, String $_image, Category $_category )
  {
    parent::__construct($_name, $_price, $_image, $_category);
   
  }
}