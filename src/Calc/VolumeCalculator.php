<?php

namespace Acme\Calc;

use Acme\CalculatorInterface;

class VolumeCalculator implements CalculatorInterface
{

  private $objects;

  function __construct($objects = [])
  {
    $this->objects = $objects;

  }

  public function calculate()
  {

    $volume;
    foreach ($this->objects as $object){
      $volume[] = $object->volume();
    }

    return $volume;
  }

}
