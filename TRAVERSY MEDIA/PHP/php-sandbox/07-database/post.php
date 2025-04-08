<?php

require 'database.php';

$id = $_GET['id'] ?? null;

if (!$id) header('Location: index.php');

// echo $id;

$stmt = $pdo->prepare('SELECT title, body FROM posts WHERE id=?');

$stmt->execute([$id]);

$post = $stmt->fetch();

$post = array_map('htmlspecialchars', $post);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title><?= $post['title'] ?></title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">My Blog</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="md my-4">
      <div class="rounded-lg shadow-md">
        <div class="p-4">
          <h2 class="text-xl font-semibold"><?= $post['title'] ?></h2>
          <p class="text-gray-700 text-lg mt-2 mb-5"><?= $post['body'] ?></p>
          <div class="container flex items-center justify-between">
            <a href="index.php">Go Back</a>

            <!-- Delete Form -->
            <div class="container flex w-min items-center">
              <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?= $id ?>">
                <button type="submit" name="submit" class="bg-sky-500 text-white px-4 py-1 mr-0.5 rounded hover:bg-sky-600 focus:outline-none">Edit</button>
              </form>
              <form action="delete.php" method="post">
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="id" value="<?= $id ?>">
                <button type="submit" name="submit" class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600 focus:outline-none">Delete</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
