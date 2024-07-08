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
      "purchaseUrl" => "https://example.com"
    ],
    [
      "The Langoliers",
      "Hail Mary",
      "https://example.com"
    ],
  ];
  ?>

  <?php foreach ($books as $book) : ?>
    <li><?= $book["name"]; ?></li>
  <?php endforeach; ?>
</body>

</html>