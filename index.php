<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Practice</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <?php
    $name = "James";
  ?>
  <h1>
    <?php if ($name == "James"){
      echo "Equal!";
    } else {
        echo "Not Equal!";
    } ?>
  </h1>
</body>
</html>