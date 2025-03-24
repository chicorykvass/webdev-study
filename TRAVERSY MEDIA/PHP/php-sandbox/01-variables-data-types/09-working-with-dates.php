<?php
/*
  'Y' - year
  'm' - month
  'd' - day
  'D' - day of the week (short)
  'l' - day of the week (full)
  'h' - hour
  'i' - minute
  's' - second
  'A' - AM/PM
*/
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
      <!-- Get year -->
      <p class="text-xl"><?= date('Y') ?></p>

      <!-- Get year with timestamp -->
      <p class="text-xl"><?= date('Y', 936345600) ?></p>

      <!-- Get timestamp from strtotime -->
      <p class="text-xl"><?= date('Y', strtotime('1980-01-11')) ?></p>

      <!-- Get month -->
      <p class="text-xl"><?= date('m') ?></p>

      <!-- Get day -->
      <p class="text-xl"><?= date('D') ?></p>
      <p class="text-xl"><?= date('l') ?></p>

      <!-- Get full date -->
      <p class="text-xl"><?= date('d.m.Y') ?></p>

      <!-- Get time -->
      <p class="text-xl"><?= date('h:i A') ?></p>
    </div>
  </div>
</body>

</html>
