<?php

 namespace Acme;

 class Output
 {
   private $area;

   function __construct($area)
   {
     $this->area = $area;
   }

   public function toJSON()
   {
     return json_encode($this->area);
   }

   public function toHTML()
   {
     return implode(' ', $this->area);
   }
 }
