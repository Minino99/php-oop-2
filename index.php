<?php

require_once __DIR__ . './classes/product.php';
require_once __DIR__ . './classes/food.php';
require_once __DIR__ . './classes/games.php';
require_once __DIR__ . './classes/health.php';
require_once __DIR__ . './classes/user.php';

$user1 = new User(true, "John", "johnwick@gmail.com", "123456789", "12/12", "351" );

var_dump($user1);