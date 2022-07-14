<?php

require_once __DIR__ . './classes/user.php';
require_once __DIR__ . '/db.php';

$user1 = new User(true, "John", "johnwick@gmail.com", "123456789", "12/12", "351" );

// $cart1 = new Cart();

var_dump($user1);
var_dump($productsDb);