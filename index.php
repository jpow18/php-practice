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
    $name = "Jaes";
    $num = 45;
  ?>
  <h1>
    <?php if (!is_array($num) && !($num > 80)){ ?>
        Equal!
    <?php } else { ?>
        Not Equal!
    <?php } ?>
  </h1>
</body>
</html>