<?php

// Database Credentials
$host = 'localhost';
$port = 3306;
$dbName = 'blog';
$username = 'php_script';
$password = 'TESTqwerty1';

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
  // Create PDO Instance
  $pdo = new PDO($dsn, $username, $password);

  // Set PDO to throw exceptions on error
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Fetch as assoc array
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

  // echo 'Database connected...';
} catch (PDOException $e) {
  // If there is an error, catch it here
  echo 'Connection failed: ' . $e->getMessage();
}
