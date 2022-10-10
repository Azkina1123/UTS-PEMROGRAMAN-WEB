<?php
session_start();

if (
  $_SESSION["mode"] != "member" &&
  $_SESSION["username"] != "400"
) {
  header("Location: signin.php?mode=Member");
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

  <title> Home | Member </title>
</head>

<body>

  <div class="wrapper member-mode">

    <?php include "member-header.php"; ?>

    <div class="main-wrapper member-mode">
      <div class="container">
        <div class="timeline">
          <h1> Welcome back, <?= $_SESSION["username"]; ?>! </h1>

        </div>

      </div>

      <?php include "footer.php"; ?>

    </div>

  </div>

</body>

</html>