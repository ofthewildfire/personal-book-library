<?php

// Set up the database connection.
$dsn = "mysql:host=localhost;port=3307;dbname=myapp;user=root;password=";
$db = new PDO($dsn);

//Lets query the db

$statement = $db->query("select * from library");
$books = $statement->fetchAll(PDO::FETCH_ASSOC);


require "partials/views/books/index.view.php";