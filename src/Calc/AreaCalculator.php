<?php

namespace Acme\Calc;

use Acme\CalculatorInterface;

class AreaCalculator implements CalculatorInterface
{

  private $shapes;

  function __construct($shapes = [])
  {
    $this->shapes = $shapes;
  }

  public function calculate()
  {
    $area;

    foreach ($this->shapes as $shape){
      $area[] = $shape->area();
    }

    return $area;
  }

}
