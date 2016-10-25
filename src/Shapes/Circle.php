<?php

namespace Acme\Shapes;

use Acme\ShapeInterface;

class Circle implements ShapeInterface
{

  private $radius;

  function __construct($radius)
  {
    $this->radius = $radius;
  }

  public function area()
  {
      return $this->radius*$this->radius*pi();
  }


}
