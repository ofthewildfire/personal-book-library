<h1>Book List</h1>

<div>

  <ul>
    <?php foreach($books as $book) : ?>
      <li>
        <a href="/book?id=<?= $book['id'] ?>">
        <?= $book['title'] ?>
        </a>
          - 🌟 - <a href="/book/update?id=<?= $book['id']?>">Update your book</a>
          - 🦴 - <a href="/book/delete?id=<?= $book['id']?>">Delete your book</a>
      </li>
    <?php endforeach ?>
  </ul>

</div>

<div>
    <a href="/book/create">Create a book </a>
</div>

