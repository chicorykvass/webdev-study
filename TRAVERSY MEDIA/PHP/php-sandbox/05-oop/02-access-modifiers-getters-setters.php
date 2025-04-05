<?php

class User {
  // Properties
  public $name;
  public $email;
  private $status = 'active';

  public function __construct($name, $email) {
    $this->name = $name;
    $this->email = $email;
  }

  // Methods
  public function login() {
    echo $this->name . ' logged in <br>';
  }

  // Getter
  public function getStatus() {
    return $this->status;
  }

  // Setter
  public function setStatus($newStatus) {
    $this->status = $newStatus;
  }
}

// Instantiate a new object
$user1 = new User('John Doe', 'john@gmail.com');

$user1->login();

$user2 = new User('Jane Doe', 'jane@gmail.com');

$user2->login();

// var_dump($user2);

$user2->setStatus('inactive');

echo "{$user1->getStatus()}<br />";
echo "{$user2->getStatus()}<br />";
