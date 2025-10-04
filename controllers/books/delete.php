<?php
$dsn = "mysql:host=localhost;port=3307;dbname=myapp;user=root;password=";
$db = new PDO($dsn);

//var_dump($_GET['id']);

//Select a single record

//First do the selection

$statement = $db->prepare("delete from library where id = :id");
$statement->execute(['id' => $_GET['id']]);

header("Location: /");


//require "partials/views/books/delete.view.php";