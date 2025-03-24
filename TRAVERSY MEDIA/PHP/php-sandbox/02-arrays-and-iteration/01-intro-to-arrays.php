<?php

$names = array('John', 'Jack', 'Jill');
$numbers = [1, 2, 3, 4, 5, 6];

function inspect($value)
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

inspect($names);
inspect($numbers);

print_r($names);
echo "<pre>$names[2]</pre>";
echo "<pre>$numbers[3]</pre>";

$numbers[6] = 6.5;
inspect($numbers);
$numbers[] = pi();
inspect($numbers);
$numbers[2] = 300;
inspect($numbers);
unset($numbers[2]);
inspect($numbers);
