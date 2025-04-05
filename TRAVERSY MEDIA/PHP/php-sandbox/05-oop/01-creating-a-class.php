<?php

class User {
  // Properties
  public $name;
  public $email;

  public function __construct($name, $email) {
    $this->name = $name;
    $this->email = $email;
  }

  // Methods
  public function login() {
    echo $this->name . ' logged in.<br />';
  }
}

// Instantiate a new object
$user1 = new User('John Doe', 'john@gmail.com');

// $user1->name = 'John Doe';
// $user1->email = 'john@gmail.com';

// var_dump($user1);

$user1->login();

$user2 = new User('Jane Doe', 'jane@gmail.com');

// $user1->name = 'Jane Doe';
// $user1->email = 'jane@gmail.com';

$user2->login();
