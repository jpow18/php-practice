<?php
print_r($_POST);
print_r($_GET);
$name = $_GET['name'];
$name = filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
$email = $_GET['email'];
?>

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
  <h1>Web Form Processor</h1>
  <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject"><br><br>

    <label for="message">Message:</label>
    <textarea id="message" name="message"></textarea><br><br>

    <div class="buttons">
      <button type="submit">Submit</button>
      <button type="submit" formmethod="post">Submit using POST</button>
      <button type="reset">Reset</button>
    </div>
  </form>
</body>

</html>