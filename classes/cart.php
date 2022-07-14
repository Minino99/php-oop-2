<?php

require_once __DIR__ . '/user.php';
require_once __DIR__ . '/product.php';
class Cart
{
 protected Product $products;
 protected $total = 0;
 protected User $user;

 function __construct(User $user, $products)
 {
  $this->user = $user;
  $this->products = $products;
  $this->total = $this->getDiscount();
 }

 public function getDiscount()
 {
  if ($this->user->isIsRegistered()) {
   $this->total = $this->products->getPrice() * 0.8;
   return $this->total;
  } else {
   $this->total = $this->products->getPrice();
   return $this->total;
  }
 }
}
