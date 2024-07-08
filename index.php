<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP learning</title>
</head>

<body>
  <h1>Recommended Books</h1>
  <?php
  $books = [
    "Do Androids dream of electric sheep",
    "The Langoliers",
    "Hail Mary",
  ];
  ?>

  <!-- loop over that list and for each item, display a list item that includes the 
  name of the book -->
  <!-- wrapping variable in braces to allow me to put tm next to it -->
  <ul>
    <!-- Providing myself more flexibiity for the foreach -->
    <?php foreach ($books as $book) : ?>
      <li><?= $book; ?></li>
    <?php endforeach; ?>
  </ul>
</body>

</html>