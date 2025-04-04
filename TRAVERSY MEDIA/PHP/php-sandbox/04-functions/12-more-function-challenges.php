<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

// EASY

function printCelsius($fahrenheit) {
  $fahrenheitToCelsius = fn($fahrenheit) => round(($fahrenheit - 32) * 50 / 9) / 10;
  echo "$fahrenheit&deg;F = " . $fahrenheitToCelsius($fahrenheit) . "&deg;C<br />";
}

printCelsius(67);

// HARDER
$baseTemp = 32;
$convertDegrees = function ($degrees) use ($baseTemp) {
  return round(($degrees - $baseTemp) * 50 / 9) / 10;
};

function printFC($degrees, $formula) {
  echo "$degrees&deg;F = " . $formula($degrees) . "&deg;C<br />";
}

printFC(68, $convertDegrees);

echo '<br>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/
function printNamesToUpperCase($names) {
  foreach ($names as $name) {
    echo strtoupper($name) . '<br />';
  }
}

$names = ['Alice', 'Bethany', 'Claire', 'Diana', 'Eleanor'];

printNamesToUpperCase($names);

echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

function findLongestWord($sentence) {
  $words = explode(' ', $sentence);
  $longest = '';
  foreach ($words as $word) {
    $word = trim($word);
    if (strlen($word) > strlen($longest)) {
      $longest = $word;
    }
  }
  return $longest;
}

echo findLongestWord('The quick brown fox jumped over the lazy dog');
