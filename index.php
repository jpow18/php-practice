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
    $amount = 4;
  ?>
  <h1>
    <?php if (empty($amount) || !is_numeric($amount) || $amount <= 0) {
        $message = "amount must be greater than 0.";
      } else {
        $message = "valid amount!";
      } ?>
      <?php echo $message ?>
  </h1>
</body>
</html>