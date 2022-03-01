<?php
  session_start();

  $user = $_SESSION['user'];
  if (!$user) {
    header('Location: index.php');
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categories</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<?php
  include('functions.php');
?>
<body>
  <div class="container-fluid">
    <div class="jumbotron">
      <h1 class="display-4">Categories</h1>
      <p class="lead">This is the CRUD of the Categories</p>
      <hr class="my-4">
    </div>
    <form method="POST">
      <div class="form-group">
        <label for="first-name">Category Name</label>
        <input id="first-name" class="form-control" type="text" name="name">
      </div>
      <div class="form-group">
        <label for="last-name">Description</label>
        <input id="last-name" class="form-control" type="text" name="description">
      </div>
      <button type="submit" name = "inputCategory" class="btn btn-primary"> Register Category </button>
      <!-- Delete -->
      <center>
      <div class="form-group">
        <label for="idDelete">ID</label>
        <input id="idDelete" class="form-control" type="text" name="delete">
      </div>
      <button type="submit" name = "deleteButton" class="btn btn-primary"> Delete </button>
    </form>
  </div>
  </center>
  <center>
  <?php
    if (isset($_POST["inputCategory"])) {
    saveCategories(credentials(),"name","description");
    showCategories(credentials());
    }
    if (isset($_POST["deleteButton"])) {
    deleteCategories(credentials(),"delete");
    showCategories(credentials());
    }
    ?>
    </center>
  </body>
</html>
