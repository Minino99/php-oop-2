<?php

require_once __DIR__ . './creditCard.php';

class User extends creditCard
{
  protected bool $isRegistered;
  protected $name;
  protected $email;


  function __construct($isRegistered, $name, $email, $_cardNumber, $_expirationDate, $_cvv)
  {
    parent::__construct($_cardNumber, $_expirationDate, $_cvv);
    $this->isRegistered = $isRegistered;
    $this->name = $name;
    $this->email = $email;
  }



  /**
   * Get the value of isRegistered
   */
  public function isIsRegistered(): bool
  {
    return $this->isRegistered;
  }

  /**
   * Set the value of isRegistered
   */
  public function setIsRegistered(bool $isRegistered): self
  {
    $this->isRegistered = $isRegistered;

    return $this;
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
   * Get the value of email
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   */
  public function setEmail($email): self
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of creditCard
   */
  public function getCreditCard(): CreditCard
  {
    return $this->creditCard;
  }

  /**
   * Set the value of creditCard
   */
  public function setCreditCard(CreditCard $creditCard): self
  {
    $this->creditCard = $creditCard;

    return $this;
  }
}
