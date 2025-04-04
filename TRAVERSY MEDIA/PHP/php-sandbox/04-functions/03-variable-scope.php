<?php

// Global scope
$name = 'Alice';

function sayHello() {
  global $name;
  // Local scope
  $name = 'Bob';
  echo "Hello, $name<br />";
}

echo $name . '<br />';
sayHello();
echo $name . '<br />';

function sayGoodbye() {
  $names = ['Jack', 'Jill'];
  foreach ($names as $name) {
    echo "Goodbye, $name<br />";
  }
}

sayGoodbye();
