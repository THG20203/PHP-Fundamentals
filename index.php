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

  // Create function - (functions like the verbs of the programming language, they are to be called,
  // they then do something, then they return results)  
  function filterByAuthor()
  {
    //
  }

  filterByAuthor();

  ?>

  <ul>
    <?php foreach ($books as $book) : ?>
      <?php if ($book['author'] === "Andy Weir") : ?>
        <li>
          <a href="<?= $book['purchaseUrl'] ?>">
            <?= $book["name"]; ?> (<?= $book["releaseYear"] ?>) - By <?= $book["author"] ?>
          </a>
        </li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>

  <p>
    <?= filterByAuthor(); ?>
  </p>

</body>

</html>

<!-- remember = signle equals is assigning. === is for chekcing for equality -->