<h1>Book List</h1>

<div>

  <ul>
    <?php foreach($books as $book) : ?>
      <li>
        <a href="/book?id=<?= $book['id'] ?>">
        <?= $book['title'] ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>

</div>


