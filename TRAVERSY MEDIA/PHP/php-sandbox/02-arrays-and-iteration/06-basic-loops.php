<?php
// Basic FOR loop
for ($i = 0; $i < 10; ++$i) {
  echo $i;
  if ($i !== 9) echo ', ';
};
echo '<br />';

// Basic WHILE loop
$word = 'Virtuoso';
$i = 0;
while ($i < strlen($word)) {
  echo $word[$i];
  if ($i !== strlen($word) - 1) echo ', ';
  ++$i;
};
echo '<br />';

// Basic DO ... WHILE loop
$word = 'Watermelon';
$i = 0;
do {
  echo $word[$i];
  if ($i !== strlen($word) - 1) echo ', ';
  ++$i;
} while ($i < strlen($word));
echo '<br />';
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
      <ul>
        <!-- <?php
              // for ($i = 0; $i <= 10; ++$i):
              ?>
          <li>Number: <?php // $i 
                      ?></li>
        <?php
        // endfor; 
        ?> -->
        <?php
        // $i = 0;
        // while ($i < 10):
        ?>
        <!-- <li>Number: <?php // ++$i 
                          ?></li> -->
        <?php // endwhile; 
        ?>
        <?php
        $i = 0;
        do {
        ?>
          <li>Number: <?= ++$i ?></li>
        <?php } while ($i < 10); ?>
      </ul>
    </div>
  </div>
</body>

</html>
