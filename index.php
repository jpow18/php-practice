<?php

  class Customer{
    protected $id = 1;
    public $name;
    public $email;
    public  $balance;

    public function getCustomer($id) {
      $this->id = $id;
      return 'John Doe';
    }
  }

  $customer = new Customer;

  echo $customer->id;

?>