<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP learning</title>
  <style>
    body {
      display: grid;
      place-items: center;
      height: 100vh;
      margin: 0;
      font-family: sans-serif;
    }
  </style>
</head>

<body>
  <!-- php code -->
  <?php
  $name = "dictionary";
  $read = false;

  if ($read) {
    $message = "You have read $name";
  } else {
    $message = "You have not read $name";
  }
  ?>

  <h1>
    <!-- <?php echo $message; ?>  -->
    <?= $message; ?>
  </h1>
</body>

</html>

<!-- 
Variables lesson
$greeting = "Hello";
echo $greeting . " " . "Tristan";
echo "$greeting Everybody!"; -->