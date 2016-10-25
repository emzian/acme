<?php

namespace Acme\Shapes;

use Acme\ShapeInterface;

class Square implements ShapeInterface
{

  private $length;

  function __construct($length)
  {
    $this->length = $length;
  }

  public function area()
  {
      return $this->length*$this->length;
  }


}
