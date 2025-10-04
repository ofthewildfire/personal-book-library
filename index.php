<?php
//require "partials/header.php";
//?>
<!---->
<!--<div class="container">-->
<!---->
<!-- <div class="row">-->
<!---->
<!--   <h1>Welcome! 🦄 </h1>-->
<!---->
<!-- </div>-->
<!---->
<!--</div>-->
<!---->
<!---->
<?php
//require "partials/footer.php";
//?>

<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
  '/' => 'controllers/books/index.php',
  '/book' => 'controllers/books/show.php',
  '/book/create' => 'controllers/books/create.php',
  '/book/update' => 'controllers/books/update.php',
  '/book/delete' => 'controllers/books/delete.php'
];

if(array_key_exists($uri, $routes)) {
  require $routes[$uri];
}
