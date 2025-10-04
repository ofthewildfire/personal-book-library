<?php
require "partials/header.php";
require "partials/nav.php"; ?>


<h1 class="text-center mt-5 mb-5">Book List</h1>

<div class="container">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col" >Title</th>
            <th scope="col" class="text-left">Update</th>
            <th scope="col" class="text-left">Delete</th>
        </tr>
        </thead>
        <tbody>
<?php foreach($books as $book) : ?>
        <tr>
            <td >
                <a href="/book?id=<?= $book['id'] ?>">
                <?= $book['title'] ?>
                </a>
            </td>
            <td  class="text-left">
                <a href="/book/update?id=<?= $book['id']?>">Update your book</a>
            </td>
            <td class="text-left">
                <a href="/book/delete?id=<?= $book['id']?>">Delete your book</a>
            </td>
        </tr>
    <?php endforeach ?>
        </tbody>
    </table>
</div>





    <div class="d-grid gap-2 col-2 mx-auto">
        <button type="button" class="btn btn-success">
            <a href="/book/create">Create a book </a>
        </button>
    </div>

    <br>
    <br>
    <br>
    <br>

<?php require "partials/footer.php" ?>