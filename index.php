<?php

  require_once './vendor/autoload.php';

  use Acme\Output;
  use Acme\Calc\AreaCalculator;
  use Acme\Calc\VolumeCalculator;
  use Acme\Shapes\Square;
  use Acme\Shapes\Rectangle;
  use Acme\Shapes\Circle;
  use Acme\Objects\Cube;

  echo (new Output( (new AreaCalculator( [ new Square(5) , new Rectangle(5 , 10) , new Circle(5) ]))->calculate() ))->toJSON();

  //echo (new Output( (new VolumeCalculator( [ new Cube(5) ]))->calculate() ))->toJSON();
