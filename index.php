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
    $pLanguages['go'] = '1.15';
    $array = [1 => 'a', 2 => 'b', 'c', 6 => [
      'python' => '8.0', 'C++' => '20'
    ], 'f'];
    $multiArray = [1, 4, 8, [6, [5, [789, 9, [ 'Heloo']]], 9, '2']];

    function foo(): int|string|array {
      return ['a', 80];
    }
    
  ?>
  <h1>
    <?php 
    var_dump(foo());
    ?>
  </h1>
</body>
</html>