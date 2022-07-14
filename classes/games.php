<?php

require_once __DIR__ . './Product.php';

class Games extends product
{

 protected $category = 'games';
 protected $color;
 protected bool $batteries;

function __construct($_price, $_name, $color, $batteries){
    parent::__construct($_name , $_price);
    $this->color = $color;
    $this->batteries = $batteries;
}


 /**
  * Get the value of category
  */
 public function getCategory()
 {
  return $this->category;
 }

 /**
  * Set the value of category
  */
 public function setCategory($category): self
 {
  $this->category = $category;

  return $this;
 }

 /**
  * Get the value of color
  */
 public function getColor()
 {
  return $this->color;
 }

 /**
  * Set the value of color
  */
 public function setColor($color): self
 {
  $this->color = $color;

  return $this;
 }

 /**
  * Get the value of batteries
  */
 public function isBatteries(): bool
 {
  return $this->batteries;
 }

 /**
  * Set the value of batteries
  */
 public function setBatteries(bool $batteries): self
 {
  $this->batteries = $batteries;

  return $this;
 }
}
