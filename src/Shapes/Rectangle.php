<?php

namespace Acme\Shapes;

use Acme\ShapeInterface;

class Rectangle implements ShapeInterface
{

  private $length;
  private $width;

  function __construct($length , $width)
  {
    $this->width = $width;
    $this->length = $length;
  }

  public function area()
  {
      return $this->length*$this->width;
  }
}
