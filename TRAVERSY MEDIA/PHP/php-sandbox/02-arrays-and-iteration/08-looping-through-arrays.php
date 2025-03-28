<?php
$names = ['John Doe', 'Matthew Thomas', 'Jose Ramirez', 'Mary Jane'];

$users = [
  ['name' => 'John', 'email' => 'john@email.com'],
  ['name' => 'Jane', 'email' => 'jane@email.com'],
  ['name' => 'Joe', 'email' => 'joe@email.com'],
  ['name' => 'Mary', 'email' => 'mary@email.com']
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
  <style>
    table {
      border-collapse: collapse;
    }

    td {
      padding: 5px 12px;
      min-width: 110px;
      border: 1px #333 solid;
    }

    tr:nth-child(even) {
      background: #ddd;
    }
  </style>
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
      <h3 class="text-xl font-semibold mb-4">Using a for loop</h3>
      <ul class="mb-6">
        <?php for ($i = 0; $i < count($names); $i++): ?>
          <li><?= $names[$i] ?></li>
        <?php endfor; ?>
      </ul>
      <h3 class="text-xl font-semibold mb-4">Using a foreach loop</h3>
      <ul class="mb-6">
        <?php foreach ($names as $name): ?>
          <li><?= $name ?></li>
        <?php endforeach; ?>
      </ul>
      <h3 class="text-xl font-semibold mb-4">Using a foreach loop with index</h3>
      <ul class="mb-6">
        <?php foreach ($names as $i => $name): ?>
          <li><?= $i . ': ' . $name ?></li>
        <?php endforeach; ?>
      </ul>
      <h3 class="text-xl font-semibold mb-4">Using a foreach loop with associative array</h3>
      <ul class="mb-6">
        <?php foreach ($users as $user): ?>
          <li><?= "{$user['name']} ({$user['email']})" ?></li>
        <?php endforeach; ?>
      </ul>
      <h3 class="text-xl font-semibold mb-4">Getting key names and values from associative array</h3>
      <table class="mb-6">
        <?php foreach ($users as $user): ?>
          <tr>
            <?php foreach ($user as $key => $value): ?>
              <td><?= "$key: $value" ?></td>
            <?php endforeach; ?>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</body>

</html>
