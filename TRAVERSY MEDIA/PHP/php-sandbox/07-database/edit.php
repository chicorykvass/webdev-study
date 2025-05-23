<?php

require 'database.php';

$id = $_POST['id'] ?? null;

if (!$id) header('Location: index.php');

if (($_POST['_method'] ?? '') === 'update') {
  $sql = 'UPDATE posts SET title=:title, body=:body WHERE id=:id';

  $stmt = $pdo->prepare($sql);

  $stmt->execute(['id' => $id, 'title' => $_POST['title'], 'body' => $_POST['body']]);

  header('Location: index.php');
} else {
  $stmt = $pdo->prepare('SELECT title, body FROM posts WHERE id=?');

  $stmt->execute([$id]);

  $post = $stmt->fetch();

  $post = array_map('htmlspecialchars', $post);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Blog Post</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">My Blog</h1>
    </div>
  </header>
  <div class="flex justify-center mt-10">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
      <h1 class="text-2xl font-semibold mb-6">Edit Blog Post</h1>
      <form method="post">
        <div class="mb-4">
          <input type="hidden" name="_method" value="update">
          <input type="hidden" name="id" value="<?= $id ?>">
          <label for="title" class="block text-gray-700 font-medium">Title</label>
          <input type="text" id="title" name="title" placeholder="Enter post title" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none" value="<?= $post['title'] ?>">
        </div>
        <div class="mb-6">
          <label for="body" class="block text-gray-700 font-medium">Body</label>
          <textarea id="body" name="body" placeholder="Enter post body" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none"><?= $post['body'] ?></textarea>
        </div>
        <div class="flex items-center justify-between">
          <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            Submit
          </button>
          <a href="index.php" class="text-blue-500 hover:underline">Back to Posts</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
