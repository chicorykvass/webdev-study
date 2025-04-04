<?php

$add = fn($a, $b) => $a + $b;

echo $add(1, 8) . '<br />';

$numbers = [1, 2, 3, 4, 5];

$tripledNumbers = array_map(fn($number) => $number * 3, $numbers);

echo '<pre>';
print_r($tripledNumbers);
echo '</pre>';
