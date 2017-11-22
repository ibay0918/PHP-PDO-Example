<?php
  $host = 'localhost';
  $user = 'root';
  $password = '123456';
  $dbname = 'pdoposts';

  // Set DSN
  $dsn = 'mysql:host='. $host .';dbname='. $dbname;

  //Create a PDO instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
  PDO::FETCH_OBJ);
  # PRDO QUERY

//  $stmt = $pdo->query('SELECT * FROM posts');

//loop through results and display on screen
//while($row = $stmt->fetch()){
//  echo $row9['title'].'<br>';
//}

//while($row = $stmt->fetch()){
//  echo $row9['title'].'<br>';
//}

# PREPARED STATEMENTS (prepare & execute)

//UNSAFE
//$sql = "SELECT * FROM posts WHERE author = '$author'";

// FETCH MULTIPLE POSTS

// User Input
$author = 'Ian';
$is_published = true;
$id = 1;

//positinal Params
//$sql = 'SELECT * FROM posts WHERE author = ?';
//$stmt = $pdo->prepare($sql);
//$stmt->execute([$author]);
//$posts = $stmt->fetchAll();

//Named Params
//$sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
//$stmt = $pdo->prepare($sql);
//$stmt->execute(['author' => $author, 'is_published' => $is_published]);
//$posts = $stmt->fetchAll();

//var_dump($posts);
//foreach($posts as $post){
//  echo $post->title . '<br>';
//}

//FETCH SINGLE POST
// $sql = 'SELECT * FROM posts WHERE id = :id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id' => $id]);
// $post = $stmt->fetch();
//
//   echo $post->body;

//GET ROW COUNT
// $stmt = $pdo->prepare('SELECT * FROM POSTS WHERE author = ?');
// $stmt->execute([$author]);
// $postCount = $stmt->rowCount();
//
// echo $postCount;


//INSERT DATA
// $title = 'Post Five';
// $body = 'This is post five';
// $author = 'Kevin';
//
// $sql = 'INSERT INTO posts(title, body, author) VALUES(:title, :body, :author)';
// $stmt = $pdo->prepare($sql);
// $stmt->excute(['title' => $title, 'body' => $body, 'author' => $author]);
// echo 'Post Added';

// UPDATE DATA
$title = 'Post Five';
$body = 'This is post five';
$author = 'Kevin';

$sql = 'INSERT INTO posts(title, body, author) VALUES(:title, :body, :author)';
$stmt = $pdo->prepare($sql);
$stmt->excute(['title' => $title, 'body' => $body, 'author' => $author]);
echo 'Post Added';
