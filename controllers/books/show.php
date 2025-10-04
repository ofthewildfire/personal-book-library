<?php
$dsn = "mysql:host=localhost;port=3307;dbname=myapp;user=root;password=kaymid";
$db = new PDO($dsn);

//var_dump($_GET['id']);

//Select a single record

//First do the selection

$statement = $db->prepare("select * from library where id = :id");
$statement->execute(['id' => $_GET['id']]);
//
$book = $statement->fetch();

require "partials/views/books/show.view.php";