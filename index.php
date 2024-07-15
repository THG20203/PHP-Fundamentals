<!-- How to start up the server? Command in the terminal:
php -S localhost:8888      -->

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
      "name" => "Hail Mary",
      "author" => "Andy Weir",
      "releaseYear" => 2021,
      "purchaseUrl" => "https://example.com"
    ],
    [
      "name" => "The Martian",
      "author" => "Andy Weir",
      "releaseYear" => 2011,
      "purchaseUrl" => "https://example.com"
    ],
  ];

  /* LAMBDA FUNCTION */
  function filter($items, $key, $value)
  {
    $filteredItems = [];
    foreach ($items as $item) {
      if ($item[$key] === $value) {
        $filteredItems[] = $item;
      }
    }
    return $filteredItems;
  };

  /* pass an array to filter Function, then a closure / anonymous function, where I can 
  be in charge of how comparison is made. So have more flexibility in terms of selecting equality, 
  or greater than 1968 etc. As I have below. I have changed the comparison. */
  $filteredBooks = filter($books, function ($book) {
    return $book['releaseYear'] > 1968;
  });
  ?>

  <ul>
    <?php foreach ($filteredBooks as $book) : ?>
      <li>
        <a href="<?= $book['purchaseUrl'] ?>">
          <?= $book["name"]; ?> (<?= $book["releaseYear"] ?>) - By <?= $book["author"] ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

</body>

</html>