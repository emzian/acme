<?php

namespace Acme\Objects;

use Acme\ShapeInterface;
use Acme\ObjectInterface;

class Cube implements ShapeInterface , ObjectInterface
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

  public function volume()
  {
      return $this->area()*$this->length;
  }


}
