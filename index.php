<?php
require "db.php";

$sql = "SELECT book_title, book_image FROM books";
$result = $db->query($sql);
$books = $result->fetchAll();

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/38edef601e.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>


<body>





  <div class="container">
    <h1 class="h1"> Seussology</h1>

    <div class="row">
      <div class="col-sm">
        <a href="home.php" class="nav-link"> home </a>
      </div>
      <div class="col-sm">
        <a href="new.php" class="nav-link"> new page</a>
      </div>

    </div>

    <div class="form-inline">
      <input type="search" class="form-control" placeholder="Search books titles... " name="q" value="" width=" 100px">
      <button type="submit" class="btn btn-danger mb-2"><i class="fas fa-search fa-2x"></i></button>
    </div>


    <div class="row">
      <?php foreach ($books as $book) : ?>
      <div class="col-5 col-sm-3"> <?php if ($book['book_image']) : ?> <a href="?"> <img
            src=" book-covers/<?php echo $book['book_image'] ?>" class="card-img-top" alt="..."></a>
        <?php else : ?>
        <a href="?">
          <?php echo $book['book_title'] ?></a>

        <?php endif; ?>

      </div>
      <?php endforeach ?>
    </div>
  </div>


</body>

</html>



<?php function errorCheck()
{
  global $db;

  $errorInfo = $db->errorInfo();

  if (isset($errorInfo[2])) {
    echo $errorInfo[2];
    exit;
  }
}
?>