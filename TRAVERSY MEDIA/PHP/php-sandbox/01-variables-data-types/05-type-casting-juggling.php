<?php
$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

// Implicit conversion
echo '<h1>Implicit Conversion</h1>';
$result = $number1 + $number2;
var_dump($result);
echo '<br />';
$result = $number1 + $number3;
var_dump($result);
echo '<br />';
$result = $number2 . $number3;
var_dump($result);
echo '<br />';
$result = $number1 . $number2;
var_dump($result);
echo '<br />';
// $result = $fruit + $number2; //Error
// var_dump($result);
// echo '<br />';
$result = $number1 + $bool1;
var_dump($result);
echo '<br />';
$result = $number1 + $bool2;
var_dump($result);
echo '<br />';
$result = $bool1 + $bool2;
var_dump($result);
echo '<br />';
$result = $bool1 . $bool2;
var_dump($result);
echo '<br />';
$result = $number1 + $null;
var_dump($result);
echo '<br />';
echo '<br />';

// Explicit conversion
echo '<h1>Explicit Conversion</h1>';
$result = (string) $number1;
var_dump($result);
echo '<br />';
$result = (int) $number3;
var_dump($result);
echo '<br />';
$result = (bool) $number1;
var_dump($result);
echo '<br />';
$result = (bool) 0;
var_dump($result);
echo '<br />';
$result = (bool) $number3;
var_dump($result);
echo '<br />';
$result = (bool) $fruit;
var_dump($result);
echo '<br />';
