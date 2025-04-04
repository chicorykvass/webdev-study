<?php

// Anonymous function (lambda)
$square = function ($number) {
  return $number * $number;
};

echo $square(5) . '<br />';

// Closures
function createCounter() {
  $count = 0;

  $counter = function () use (&$count) {
    return ++$count;
  };

  return $counter;
}

$counter = createCounter();
$counter2 = createCounter();

echo $counter() . '<br />';
echo $counter() . '<br />';
echo $counter() . '<br />';
echo $counter2() . '<br />';
echo $counter2() . '<br />';
