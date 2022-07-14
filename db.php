<?php

require_once __DIR__ . './classes/user.php';
require_once __DIR__ . './classes/product.php';
require_once __DIR__ . './classes/food.php';
require_once __DIR__ . './classes/games.php';
require_once __DIR__ . './classes/health.php';

$food1 = new Food("crocchette al pollo","12$","12/12", "dog");
$food2 = new Food("crocchette al tacchino","12$","12/12", "cat");
$game1 = new Games(4,"pallina","rosso", false);
$game2 = new Games(18,"topolino","grigio", true);
$health1 = new Health("antipulci","30$", true, "cat");
$health2 = new Health("antizecche","30$", true, "cat");

$productsDb = [$food1, $food2, $game1, $game2, $health1, $health2];

