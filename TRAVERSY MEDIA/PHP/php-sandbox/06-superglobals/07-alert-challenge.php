<?php
$title = '';
$description = '';
$submitted = false;
$submit_success = false;
$uploadState = 0;
$messages = [
  'fld_empty' => 'This field should not be empty',
  'upl_success' => 'File Uploaded!',
  'upl_error' => 'File Upload Error: ',
  'inv_f_type' => 'Invalid File Type'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
  $title = htmlspecialchars($_POST['title'] ?? '');
  $description = htmlspecialchars($_POST['description'] ?? '');


  $file = $_FILES['logo'];

  if ($file['error'] === UPLOAD_ERR_OK) {
    // Specify where to upload
    $uploadDir = 'uploads/';

    // Check and create dir
    if (!is_dir($uploadDir)) {
      mkdir($uploadDir, 0755, true);
    }

    // Create file name
    $filename = uniqid() . '-' . $file['name'];

    // Check file type
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $fileExtension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    // Make sure extension is in array
    if (in_array($fileExtension, $allowedExtensions)) {
      // Upload file
      if (move_uploaded_file($file['tmp_name'], $uploadDir .  $filename)) {
        $uploadState = 0;
      } else {
        $uploadState = 1;
      }
    } else {
      $uploadState = 2;
    }
  }

  $submitted = true;
}

function message_alert($message) {
  echo "<div class=\"alert p-4 mb-4 text-sm font-semibold text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400\" role=\"alert\">$message</div>";
}

function message_success($message) {
  echo "<div class=\"alert p-4 mb-4 text-sm font-semibold text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400\" role=\"alert\">$message</div>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Job Listing</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <div class="flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
      <h1 class="text-2xl font-semibold mb-6">Create Job Listing</h1>
      <form method="post" enctype="multipart/form-data">
        <div class="<?= $submitted && empty($title) ? 'mb-1' : 'mb-4' ?>">
          <label for="title" class="block text-gray-700 font-medium">Title</label>
          <input type="text" id="title" name="title" placeholder="Enter job title" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none" value="<?= $title ?>">
        </div>
        <?php if ($submitted && empty($title)) message_alert($messages['fld_empty']); ?>
        <div class="<?= $submitted && empty($description) ? 'mb-0' : 'mb-6' ?>">
          <label for="description" class="block text-gray-700 font-medium">Description</label>
          <textarea id="description" name="description" placeholder="Enter job description" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none"><?= $description ?></textarea>
        </div>
        <?php if ($submitted && empty($description)) message_alert($messages['fld_empty']); ?>
        <div class="<?= $submitted ? 'mb-1' : 'mb-4' ?>">
          <label for="resume" class="block text-gray-700 font-medium">Logo</label>
          <input type="file" id="logo" name="logo" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
        </div>
        <?php
        if ($submitted && !empty($title) && !empty($description) && !empty($file['name'])) {
          switch ($uploadState) {
            case 1:
              message_alert($messages['upl_error'] . $file['error']);
              break;

            case 2:
              message_alert($messages['inv_f_type']);
              break;

            default:
              message_success($messages['upl_success']);
              $submit_success = true;
              break;
          }
        }
        ?>
        <div class="flex items-center justify-between">
          <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            Create Listing
          </button>
          <a href="#" class="text-blue-500 hover:underline">Back to Listings</a>
        </div>
      </form>

      <!-- Display submitted data -->
      <?php if ($submit_success) : ?>
        <div class="mt-6 p-4 border rounded bg-gray-200">
          <img src="<?= $uploadDir . $filename ?>">
          <h2 class="text-lg font-semibold">Submitted Job Listing:</h2>
          <p><strong>Title:</strong> <?= $title ?></p>
          <p><strong>Description:</strong> <?= $description ?></p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</body>

</html>
