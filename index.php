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
    $pLanguages = ['php' => '8.0.26', 'python' => '3.10.0b5'];
  ?>
  <h1>
    <?php 
      echo '<pre>';
      foreach ($pLanguages as $item)
        print_r($item . "<br>");
      echo '</pre>'
    ?>
  </h1>
</body>
</html>