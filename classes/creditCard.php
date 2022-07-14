<?php
class CreditCard {
    protected $number;
    protected $expirationDate;
    protected $cvv;
    
    function __construct($number, $expirationDate, $cvv) {
        $this->number = $number;
        $this->expirationDate = $expirationDate;
        $this->cvv = $cvv;
    }


    /**
     * Get the value of number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     */
    public function setNumber($number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of expirationDate
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set the value of expirationDate
     */
    public function setExpirationDate($expirationDate): self
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get the value of cvv
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     */
    public function setCvv($cvv): self
    {
        $this->cvv = $cvv;

        return $this;
    }
    
}





?>
