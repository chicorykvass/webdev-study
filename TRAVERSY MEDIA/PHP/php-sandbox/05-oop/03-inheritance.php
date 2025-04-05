<?php

class User {
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email) {
    $this->name = $name;
    $this->email = $email;
  }

  public function login() {
    echo $this->name . ' logged in <br>';
  }

  public function getStatus() {
    return $this->status;
  }
}

class Admin extends User {
  public $level;

  public function __construct($name, $email, $level) {
    parent::__construct($name, $email);
    $this->level = $level;
  }

  public function login() {
    echo 'Admin ';
    parent::login();
  }
}

$admin1 = new Admin('Tom Smith', 'tom.smith@gmail.com', 5);

// var_dump($admin1);

echo $admin1->name . '<br />';
echo $admin1->email . '<br />';
echo $admin1->level . '<br />';
echo $admin1->getStatus() . '<br />';
$admin1->login();
