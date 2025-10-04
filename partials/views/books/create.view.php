<?php
require "partials/header.php";
require "partials/nav.php"; ?>

<div class="container mt-5">
    <form method="POST">
        <fieldset>
            <legend>Add a Book to the Library</legend>
            <div>
                <label for="title" class="form-label mt-4">Book Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Book Title" required>
            </div>

            <div>
                <label for="author" class="form-label mt-4">Book Author</label>
                <input type="text" class="form-control" id="author" name="author" aria-describedby="author" placeholder="Book Author" required>
            </div>


            <div>
                <label for="genre" class="form-label mt-4">Book Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" aria-describedby="genre" placeholder="Book Genre" required>
            </div>


            <div>
                <label for="year" class="form-label mt-4">Book Release Year</label>
                <input type="text" class="form-control" id="year" name="year" aria-describedby="year" placeholder="Book Release Year" required>
            </div>


            <div>
                <label for="rating" class="form-label mt-4">Book Rating</label>
                <input type="text" class="form-control" id="rating" name="rating" aria-describedby="rating" placeholder="Book Rating" required>
            </div>

            <br>
            <br>
            <button type="submit" class="btn btn-primary">Add book to library</button>
        </fieldset>
    </form>
</div>
    <br>
    <br>
    <br>
<?php require "partials/footer.php" ?>