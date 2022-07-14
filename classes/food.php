<?php

require_once __DIR__ . './Product.php';

class Food extends product{
 
protected $category = 'food';
protected $expireDate;
protected $forWho;


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
 * Get the value of expireDate
 */
public function getExpireDate()
{
return $this->expireDate;
}

/**
 * Set the value of expireDate
 */
public function setExpireDate($expireDate): self
{
$this->expireDate = $expireDate;

return $this;
}

/**
 * Get the value of forWho
 */
public function getForWho()
{
return $this->forWho;
}

/**
 * Set the value of forWho
 */
public function setForWho($forWho): self
{
$this->forWho = $forWho;

return $this;
}
}
