<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A simple webpage with a brown header, tan body, and brown footer">
  <title>Accessible Webpage</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <?php require('./view/header.php') ?>
  <main class="tan">
    <h2>Body</h2>
    <p>This is the main content of the webpage. It is placed within a 'main' element to indicate its importance and increase accessibility for screen readers.</p>
  </main>
  <footer role="contentinfo" class="brown">
    <h3>Footer</h3>
  </footer>
</body>

</html>