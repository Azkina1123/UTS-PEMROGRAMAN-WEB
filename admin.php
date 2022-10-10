<?php
session_start();

if (
  $_SESSION["mode"] != "admin" &&
  $_SESSION["username"] != "004"
) {
  header("Location: signin.php?mode=Admin");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css?v=<?= time(); ?>">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

  <title> Home | Admin </title>
</head>

<body>

  <div class="wrapper admin-mode">

    <?php include "admin-header.php"; ?>

    <div class="main-wrapper admin-mode">
      <div class="container">
        <div class="timeline">
          <h1> Welcome back, Admin! </h1>

        </div>

      </div>

      <?php include "footer.php"; ?>

    </div>

  </div>

</body>

</html>