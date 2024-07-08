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
  <ul>
    <?php foreach ($books as $book) {
      echo "<li>$book</li>";
    }
    ?>
  </ul>
</body>

</html>

<!-- 
Variables lesson
$greeting = "Hello";
echo $greeting . " " . "Tristan";
echo "$greeting Everybody!"; -->