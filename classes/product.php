<?php

class Product
{

 protected $name;
 protected $price;


 function __construct($name, $price)
 {
  $this->name = $name;
  $this->price = $price;
 }

 /**
  * Get the value of name
  */
 public function getName()
 {
  return $this->name;
 }

 /**
  * Set the value of name
  */
 public function setName($name): self
 {
  $this->name = $name;

  return $this;
 }

 /**
  * Get the value of price
  */
 public function getPrice()
 {
  return $this->price;
 }

 /**
  * Set the value of price
  */
 public function setPrice($price): self
 {
  $this->price = $price;

  return $this;
 }
}
