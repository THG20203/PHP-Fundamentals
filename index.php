<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP learning</title>
</head>

<body>
  <!-- Associative array - associating a key with a value, like a key value pair -->
  <?php
  $books = [
    [
      "name" => "Do Androids dream of electric sheep",
      "author" => "Philip Dick",
      "releaseYear" => 1968,
      "purchaseUrl" => "https://example.com"
    ],
    [
      "name" => "The Langoliers",
      "author" => "Hail Mary",
      "releaseYear" => 2021,
      "purchaseUrl" => "https://example.com"
    ],
  ];
  ?>

  <?php foreach ($books as $book) : ?>
    <li>
      <a href="<?= $book['purchaseUrl'] ?>">
        <?= $book["name"]; ?>(<?= $book["releaseYear"] ?>)
      </a>
    </li>
  <?php endforeach; ?>
</body>

</html>