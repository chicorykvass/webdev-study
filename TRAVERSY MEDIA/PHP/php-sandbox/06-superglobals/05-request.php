<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
  echo htmlspecialchars($_REQUEST['name'] ?? '') . '<br />';
  echo htmlspecialchars($_REQUEST['age'] ?? '') . '<br />';
}

?>

<form method="post">
  <div>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
  </div>
  <div>
    <label for="age">Age:</label>
    <input type="text" name="age" id="age">
  </div>
  <input type="submit" name="submit" value="Submit">
</form>
