<?php

require_once __DIR__ . './classes/user.php';
require_once __DIR__ . '/db.php';
require __DIR__ . '/classes/cart.php';

$user1 = new User(true, "John", "johnwick@gmail.com", "123456789", "12/12", "351" );

$cart1 = new Cart($user1, $game1);
$cart1 = new Cart($user1, $game2);

var_dump($cart1);