<?php
  $host = 'localhost';
  $user = 'root';
  $password = 'sdmV[TQqecJ@8_u4';
  $dbname = 'pdoposts';

  // Set DSN (data source name)
  $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

  // Create PDO instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  // PDO QUERY
  //$stmt = $pdo->query('SELECT * FROM posts');

  /* while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['title'] . '<br>';
  } */

  /* while ($row = $stmt->fetch()) {
    echo $row->title . '<br>';
  } */

  // prepared statements (prepare and execute)

  // UNSAFE
  // $sql = "SELECT * FROM posts WHERE author = '$author'";  Can inject sql as $author data

  // FETCH MULTIPLE POSTS

  // User input
  $author = 'Brad';
  $is_published = true;
  $id = 1;
  $limit = 1;

// Positional parameters
$sql = 'SELECT * FROM posts WHERE author = ? && is_published = ? LIMIT ?';
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$author, $is_published, $limit]);
  $posts = $stmt->fetchAll();


// Named Params
// $sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['author' => $author, 'is_published' => $is_published]);
// $posts = $stmt->fetchAll();


// // var_dump($posts);
foreach($posts as $post) {
  echo $post->title . '<br>';
}

// FETCH SINGLE POST
// $sql = 'SELECT * FROM posts WHERE id = :id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id' => $id]);
// $posts = $stmt->fetch();

// // GET ROW COUNT
// $stmt = $pdo->prepare('SELECT * FROM POSTS WHERE author = ?');
// $stmt->execute([$author]);
// $postCount = $stmt->rowCount();

// echo $postCount;

// INSERT DATA
// $title = 'Post Five';
// $body = 'This is post five';
// $author = 'Kevin';

// $sql = 'INSERT INTO posts(title, body, author) VALUES(:title, :body, :author)';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
// echo 'Post Added';

// UPDATE DATA
// $title = 'Post Five';
// $body = 'This is post five';
// $author = 'Kevin';

// $sql = 'INSERT INTO posts(title, body, author) VALUES(:title, :body, :author)';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
// echo 'Post Added';

// DELETE DATA
// $id = 3;
// $sql = 'DELETE FROM posts WHERE id = :id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id' => $id]);
// echo 'Post Deleted';

// SEARCH DATA
// $search = "%t 2%";
// $sql = "SELECT * FROM posts WHERE title LIKE ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$search]);
// $posts = $stmt->fetchAll();

// foreach($posts as $post) {
//   echo $post->title . '<br>';
// }


?>