<?php
$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];
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
      <!-- count() -->
      <p class="text-xl"><?= count($ids) ?></p>

      <?php
      // sort(), rsort()
      sort($ids);
      sort($users);
      rsort($ids);

      // array_push
      array_push($ids, 100);

      // array_unshift
      array_unshift($users, 'user4');

      // array_pop
      array_pop($users);

      // array_shift
      array_shift($ids);

      // array_slice
      $ids2 = array_slice($ids, 1, 4);

      // array_splice
      array_splice($ids, 2, 2, ['yoink!', 'www']);

      // explode()
      $tags = 'tech, code, programming';
      $tags = explode(', ', $tags);
      ?>

      <h2 class="text-xl font-semibold my-4">IDs Array:</h2>
      <p>
      <pre>
          <?php print_r($ids); ?>
        </pre>
      </p>
      <h2 class="text-xl font-semibold my-4">Users Array:</h2>
      <p>
      <pre>
          <?php print_r($users); ?>
        </pre>
      </p>
      <h2 class="text-xl font-semibold my-4">IDs 2 Array:</h2>
      <p>
      <pre>
          <?php print_r($ids2); ?>
        </pre>
      </p>

      <!-- array_sum() -->
      <pre>Array sum of IDs 2: <?= array_sum($ids2) ?>
        </pre>

      <!-- array_search() -->
      <pre>User2 is at index: <?= array_search('user2', $users) ?>
      </pre>

      <!-- in_array() -->
      <pre>User2 exists: <?= var_dump(in_array('user2', $users)) ?>
      </pre>
      <pre>User3 exists: <?= var_dump(in_array('user3', $users)) ?>
      </pre>

      <h2 class="text-xl font-semibold my-4">Tags Array:</h2>
      <pre>
          <?php print_r($tags); ?>
        </pre>

      <!-- implode() -->
      <p class="text-xl">Tags: <?= implode('; ', $tags) ?>
      </p>
    </div>
  </div>
</body>

</html>
