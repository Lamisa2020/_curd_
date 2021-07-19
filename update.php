<?php
include 'connection.php';
if (isset($_POST['update'])) {
  $email = $_POST['email'];
  $information = $_POST['information'];
  $id = $_GET['id'];
  // echo $email;
  // echo $information;
  $update = "UPDATE `data` SET `e-mail`='$email',`information`='$information' WHERE id=$id";
  $update_run = mysqli_query($conn, $update);
  if ($update_run) {
    echo 'inserted';
  } else {
    echo 'not inserted';
  }

  header('location:display.php');
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>CRUD</title>
</head>

<body>
  <div class="container col-lg-6">
    <br>
    <h1 class="bg-dark text-center p-2 text-white">Update data</h1><br>
    <?php
    include 'connection.php';
    $id = $_GET["id"];
    $select = "SELECT * FROM `data` WHERE id=$id";
    $select_run = mysqli_query($conn, $select);
    while ($row = mysqli_fetch_assoc($select_run)) {
      // echo $row['email'];


    ?>
      <form method="POST">
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control" value="<?php echo  $row['e-mail']; ?>">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
            else.</small>
        </div>
        <div class="form-group">
          <label>Information</label>
          <input type="text" name="information" class="form-control" value="<?php echo  $row['information']; ?>">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
      <?php } ?>
      <button type="submit" class="btn btn-primary" name="update">Submit</button>
      </form>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>