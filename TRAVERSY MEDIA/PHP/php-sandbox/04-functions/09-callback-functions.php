<?php

$numbers = [1, 2, 3, 4, 5];
$square = function ($number) {
  return $number * $number;
};
$squaredNumbers = array_map($square, $numbers);

// echo '<pre>';
// print_r($squaredNumbers);
// echo '</pre>';

function applyCallback($callback, $value) {
  return ($callback($value));
}

$double = function ($number) {
  return $number * 2;
};

echo applyCallback($square, 7) . '<br />';
echo applyCallback($double, 7) . '<br />';
