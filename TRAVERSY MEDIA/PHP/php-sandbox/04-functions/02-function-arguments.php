<?php

function add($a = 1, $b = 1) {
  return $a + $b;
}

echo add(4, 5) . '<br />';
echo add(134, 596) . '<br />';
echo add() . '<br />';

function sayHello($name = 'World') {
  return "Hello, $name";
}

echo sayHello('John') . '<br />';
echo sayHello() . '<br />';

function addAll(...$numbers) {
  return array_sum($numbers);
}

echo addAll(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12) . '<br />';
