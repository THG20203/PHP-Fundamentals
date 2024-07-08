<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP learning</title>
</head>

<!-- Array - single variable that represents a list of recommended books -->

<body>
  <h1>Recommended Books</h1>

  <!-- array is the programming equivalent of a folder. Single variable that represents 
  a list of recommended books -->
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

<!-- 
Variables lesson
$greeting = "Hello";
echo $greeting . " " . "Tristan";
echo "$greeting Everybody!"; -->