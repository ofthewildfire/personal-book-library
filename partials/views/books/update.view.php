<?php
require "partials/header.php";
require "partials/nav.php"; ?>

<div>
    <h1 class="text-center my-5"> <?= $book['title'] ?>  </h1>
    <br>
    <br>

    <div class="container mt-5">
        <form method="POST">
            <fieldset>
                <legend>Update  <?= $book['title'] ?> </legend>
                <div>
                    <label for="title" class="form-label mt-4">Book Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Book Title" required value="<?= $book['title'] ?>">
                </div>

                <div>
                    <label for="author" class="form-label mt-4">Book Author</label>
                    <input type="text" class="form-control" id="author" name="author" aria-describedby="author" placeholder="Book Author" required value="<?= $book['author'] ?>">
                </div>


                <div>
                    <label for="genre" class="form-label mt-4">Book Genre</label>
                    <input type="text" class="form-control" id="genre" name="genre" aria-describedby="genre" placeholder="Book Genre" required value="<?= $book['genre'] ?>">
                </div>


                <div>
                    <label for="year" class="form-label mt-4">Book Release Year</label>
                    <input type="text" class="form-control" id="year" name="year" aria-describedby="year" placeholder="Book Release Year" required value="<?= $book['year'] ?>">
                </div>


                <div>
                    <label for="rating" class="form-label mt-4">Book Rating</label>
                    <input type="text" class="form-control" id="rating" name="rating" aria-describedby="rating" placeholder="Book Rating" required value="<?= $book['rating'] ?>">
                </div>

                <br>
                <br>
                <button type="submit" class="btn btn-primary">Update <?= $book['title'] ?></button>
            </fieldset>
        </form>
    </div>
    <br>
    <br>
    <br>

<?php require "partials/footer.php" ?>