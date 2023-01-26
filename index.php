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
    <?php 
      $counter = 0;
      $arr = array("Rob", "Jimbo", "Slice", "Gerard");
      while ($counter < count($arr)) {
        echo $arr[$counter] . "<br>";
        $counter++;
      }
    ?>
  </h1>
</body>
</html>