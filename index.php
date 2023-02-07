<?php

  class Customer{
    protected $id = 1;
    public $name;
    public $email;
    public  $balance;

    public function __construct($id, $name, $email, $balance){
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
    $this->balance = $balance;


    }
    public function __destruct()
    {
      echo "The destructor ran....";
    }

    public function getCustomerName() {
      return $this->name;
    }

  }

  $customer = new Customer(1, "Jonathan", "sdalkfjhas@asdhfa.asd", 12093123);
  echo $customer->getCustomerName();
?>