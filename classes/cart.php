<?php

require_once __DIR__ . '/user.php';
require_once __DIR__ . '/product.php';
class Cart
{
 protected $products = [];
 protected $total = 0;
 protected User $user;

 function __construct(User $_user, $_products)
 {
  $this->user = $_user;
  $this->products = array_push($this->products, ...$_products);
 }

 public function getTotal()
 {
  foreach ($this->products as $product) {
   $this->total += $product->getPrice();
  }
  return $this->total;
 }

}

