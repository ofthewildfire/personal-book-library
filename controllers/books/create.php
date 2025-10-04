<?php
$dsn = "mysql:host=localhost;port=3307;dbname=myapp;user=root;password=kaymid";
$db = new PDO($dsn);

//Insert into
//INSERT INTO `library` (`title`, `author`, `genre`, `year`, `rating`) VALUES
//('Throne of Glass', 'Sarah J. Maas', 'Fantasy / New Adult', 2012, 5);

//if($_SERVER['REQUEST_METHOD'] === 'POST') {
//    $title = $_POST['title'];
//    $author = $_POST['author'];
//    $genre = $_POST['genre'];
//    $year = $_POST['year'];
//    $rating = $_POST['rating'];
//
//    var_dump($_POST);
//}


if($_SERVER['REQUEST_METHOD']=== 'POST') {
//  $query = 'INSERT INTO library (title, )'
  $statement = $db->prepare("INSERT INTO library (title, author, genre, year, rating) VALUES (:title, :author, :genre, :year, :rating)");
  $statement->execute([
    'title' => $_POST['title'],
    'author' => $_POST['author'],
    'genre' => $_POST['genre'],
    'year' => $_POST['year'],
    'rating' => $_POST['rating'],
  ]);


  header("Location: /");
}

require "partials/views/books/create.view.php";


