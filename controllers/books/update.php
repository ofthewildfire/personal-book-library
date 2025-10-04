<?php

$dsn = "mysql:host=localhost;port=3307;dbname=myapp;user=root;password=";
$db = new PDO($dsn);

if($_SERVER['REQUEST_METHOD'] === 'GET') {
  $statement = $db->prepare("select * from library where id = :id");
  $statement->execute(['id' => $_GET['id']]);
//
  $book = $statement->fetch();
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
//  save it all and update lmao

//  var_dump($_GET['id']);

  $sql = "UPDATE library SET title = :title, author = :author, genre = :genre, year = :year, rating = :rating WHERE id = :id";
  $statement = $db->prepare($sql);
  $statement->execute([
    'title' => $_POST['title'],
    'author' => $_POST['author'],
    'genre' => $_POST['genre'],
    'year' => $_POST['year'],
    'rating' => $_POST['rating'],
    'id' => $_GET['id']
  ]);
  header("Location: /");
}




require "partials/views/books/update.view.php";