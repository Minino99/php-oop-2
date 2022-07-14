<?php

require_once __DIR__ . './Product.php';

class Health extends product
{

    protected $category = 'health';
    protected bool $isAvaible;
    protected $forWho;

    function __construct($_name, $_price, $isAvaible, $forWho)
    {
        parent::__construct($_name, $_price);
        $this->isAvaible = $isAvaible;
        $this->forWho = $forWho;
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
     * Get the value of isAvaible
     */
    public function isIsAvaible(): bool
    {
        return $this->isAvaible;
    }

    /**
     * Set the value of isAvaible
     */
    public function setIsAvaible(bool $isAvaible): self
    {
        $this->isAvaible = $isAvaible;

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
