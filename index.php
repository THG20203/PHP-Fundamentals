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
  function filterByAuthor($books)
  {
    $filteredBooks = [];

    // A foreach loop is used to iterate over each book in the $books array. For each iteration, the 
    // current book is assigned to the variable $book.
    foreach ($books as $book) {
      if ($book["author"] === "Andy Weir") {
        // If the condition in the if statement is true (i.e., the author is "Andy Weir"), the current book is 
        // added to the $filteredBooks array using the [] syntax, which appends the book to the array.
        $filteredBooks[] = $book;
      }
    }
  }

  ?>

  <ul>
    <!-- The foreach loop in PHP is used to iterate over arrays. In this case, it iterates over the 
    $books array.  -->
    <!-- This is assumed to be an array of books. Each element in this array represents a book. -->
    <!-- During each iteration of the foreach loop, the current element (a single book from the $books array) 
    is assigned to the variable $book. -->
    <?php foreach ($books as $book) : ?>
      <li>
        <a href="<?= $book['purchaseUrl'] ?>">
          <?= $book["name"]; ?> (<?= $book["releaseYear"] ?>) - By <?= $book["author"] ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

  <p>
    <?= filterByAuthor($books); ?>
  </p>

</body>

</html>

<!-- remember = signle equals is assigning. === is for chekcing for equality -->