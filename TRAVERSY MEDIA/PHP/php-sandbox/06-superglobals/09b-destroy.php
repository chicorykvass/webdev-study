<?php

setcookie('username', '', time() - 3600, '/');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Cookies</title>
</head>

<body>

  <p>
    Your cookie has been deleted. <a href="09a-page.php">Go to page.php</a>
  </p>

</body>

</html>
