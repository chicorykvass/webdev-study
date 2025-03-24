<?php
$string = 'Hello World';
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
      <!-- strlen() -->
      <p class="text-xl"><?= strlen($string) ?></p>

      <!-- str_word_count() -->
      <p class="text-xl"><?= str_word_count($string) ?></p>

      <!-- strpos() -->
      <p class="text-xl"><?= strpos($string, 'World') ?></p>

      <!-- Get specific char by index -->
      <p class="text-xl"><?= $string[6] ?></p>

      <!-- substr() -->
      <p class="text-xl"><?= substr($string, 6, 5) ?></p>

      <!-- str_replace() -->
      <p class="text-xl"><?= str_replace('World', 'Wraeclast', $string) ?></p>

      <!-- strtolower() -->
      <p class="text-xl"><?= strtolower($string) ?></p>

      <!-- strtoupper() -->
      <p class="text-xl"><?= strtoupper($string) ?></p>

      <!-- ucwords() -->
      <p class="text-xl"><?= ucwords('some lowercase words') ?></p>

      <!-- trim() -->
      <p class="text-xl"><?= trim('    Hello World     ') ?></p>
    </div>
  </div>
</body>

</html>
