<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

$num1 = 20;
$num2 = 10;



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <!-- Basic Math -->
      <p class="text-xl">
        <?= "$num1 + $num2 = " . $num1 + $num2 ?>
      </p>
      <p class="text-xl">
        <?= "$num1 - $num2 = " . $num1 - $num2 ?>
      </p>
      <p class="text-xl">
        <?= "$num1 * $num2 = " . $num1 * $num2 ?>
      </p>
      <p class="text-xl">
        <?= "$num1 / $num2 = " . $num1 / $num2 ?>
      </p>
      <p class="text-xl">
        <?= "$num1 % $num2 = " . $num1 % $num2 ?>
      </p>

      <!-- Assignment Operator -->
      <p class="text-xl">
        <?php
        $num3 = 10;
        // $num3 = $num3 + 20;
        // $num3 += 20;
        // $num3 -= 20;
        $num3 /= 2;
        ?>

        <?= '$num3 = ' . $num3 ?>
      </p>

      <!-- Built-in PHP functions -->
      <!-- rand() -->
      <p class="text-xl">
        Random number: <?= rand() ?>
      </p>
      <p class="text-xl">
        Max random number: <?= getrandmax() ?>
      </p>
      <p class="text-xl">
        Random number between 1 and 10: <?= rand(1, 10) ?>
      </p>

      <!-- round() -->
      <p class="text-xl">
        round(4.7) = <?= round(4.7) ?>
      </p>
      <p class="text-xl">
        round(4.2) = <?= round(4.2) ?>
      </p>

      <!-- ceil() -->
      <p class="text-xl">
        ceil(4.2) = <?= ceil(4.2) ?>
      </p>

      <!-- floor() -->
      <p class="text-xl">
        floor(4.7) = <?= floor(4.7) ?>
      </p>

      <!-- sqrt() -->
      <p class="text-xl">
        sqrt(81) = <?= sqrt(81) ?>
      </p>

      <!-- pi() -->
      <p class="text-xl">
        pi = <?= pi() ?>
      </p>

      <!-- abs() -->
      <p class="text-xl">
        abs(-4.7) = <?= abs(-4.7) ?>
      </p>

      <!-- max() -->
      <p class="text-xl">
        max(1, 3, 50, 20) = <?= max(1, 3, 50, 20) ?>
      </p>
      <p class="text-xl">
        max([1, 3, 5]) = <?= max([1, 3, 5]) ?>
      </p>

      <!-- min() -->
      <p class="text-xl">
        min(1, 3, 50, 20) = <?= min(1, 3, 50, 20) ?>
      </p>
      <p class="text-xl">
        min([1, 0, 5]) = <?= min([1, 0, 5]) ?>
      </p>

      <!-- number_format() -->
      <p class="text-xl">
        number_format(1234567.19234567, 2, '.', ',') = <?= number_format(1234567.19234567, 2, '.', ',') ?>
      </p>
    </div>
  </div>
</body>

</html>
