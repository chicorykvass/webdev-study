<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

// String
$name = 'Artyom Gerasimov';
$name2 = "William Shakespeare";

var_dump($name2);
echo '<br />' . getType($name) . '<br />';

// Integer
$age = 35;
var_dump($age);
echo '<br />';

// Float
$rating = 4.5;
var_dump($rating);
echo '<br />';

// Boolean
$isLoaded = true;
var_dump($isLoaded);
echo '<br />';

// Array
$friends = ['John', 'Jack', 'Jane'];
var_dump($friends);
echo '<br />';

// Object
$person = new stdClass();
var_dump($person);
echo '<br />';

// NULL
$car = null;
var_dump($car);
echo '<br />';

// Resource
$file = fopen('02-variables.php', 'r');
var_dump($file);
echo '<br />';
