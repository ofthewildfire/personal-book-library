<?php
require "partials/header.php";
require "partials/nav.php"; ?>

<div class="container mt-4 text-center">
  <h1> <?= htmlspecialchars($book['title'])?> </h1>
  <p>This book was written by  <?= htmlspecialchars($book['author'])  ?> and released in <?= htmlspecialchars($book['year'])  ?> </p>
    <p>Genre: <?= htmlspecialchars($book['genre']) ?></p>
    <p>Rating: <?= htmlspecialchars($book['rating'])?></p>
</div>

    <div class="d-grid gap-2 col-2 mx-auto">
        <button type="button" class="btn btn-info">
            <a href="/">... go back to books! </a>
        </button>
    </div>
<?php require "partials/footer.php" ?>