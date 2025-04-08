<?php

require 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['_method'] ?? '') === 'delete') {
  $id = $_POST['id'];
  $sql = 'DELETE FROM posts WHERE id=?';
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$id]);
}
header('Location: index.php');
