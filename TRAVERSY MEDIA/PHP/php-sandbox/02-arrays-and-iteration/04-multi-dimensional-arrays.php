<?php
$fruits = [
  ['Apple', 'Red'],
  ['Orange', 'Orange'],
  ['Banana', 'Yellow']
];

$fruits[] = ['Grape', 'Purple'];

$users = [
  ['name' => 'John', 'email' => 'john@gmail.com', 'password' => '1234567'],
  ['name' => 'Mary', 'email' => 'maru@gmail.com', 'password' => 'qwerty'],
  ['name' => 'Ken', 'email' => 'ken@gmail.com', 'password' => 'thirsday']
];

$users[] = ['name' => 'Jill', 'email' => 'jill@gmail.com', 'password' => '5289345'];

array_push($users, ['name' => 'Mike', 'email' => 'mike@gmail.com', 'password' => '23472852']);
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
      <p class="text-xl"><?= "{$fruits[0][1]} {$fruits[0][0]}" ?></p>
      <h2 class="font-semibold my-4">Fruits Array:</h2>
      <p class="text-xl">
      <pre><?php print_r($fruits); ?></pre>
      </p>
      <h2 class="font-semibold my-4">Users Array:</h2>
      <p class="text-xl">
      <pre><?php print_r($users); ?></pre>
      </p>
    </div>
  </div>
</body>

</html>
