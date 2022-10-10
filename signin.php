<?php

session_start();

$mode = "Member";
if (isset($_GET["mode"])) {
  $mode = $_GET["mode"];
}

if (isset($_POST["signin"])) {
  if (
    $mode == "Admin" &&
    $_POST["username"] == "004" &&
    $_POST["password"] == "123"
  ) {
    $_SESSION["mode"] = "admin";
    $_SESSION["username"] = "004";
    header("Location: admin.php");
  } else if (
    $mode == "Member" &&
    $_POST["username"] == "400" &&
    $_POST["password"] == "321"
  ) {
    $_SESSION["mode"] = "member";
    $_SESSION["username"] = "400";
    header("Location: member.php");
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

  <link rel="stylesheet" href="style.css?v=<?= time(); ?>">

  <title> Sign In | Tarvita Cell </title>

</head>

<body>

  <div class="wrapper">

    <?php include "header.php"; ?>

    <div class="container">

      <?php if ($mode == "Member") { ?>
        <div class="signin-wrapper" style="border: 2px solid var(--text-in-black);">
        <?php } else if ($mode == "Admin") { ?>
          <div class="signin-wrapper" style="border: 2px solid var(--text-in-black-hover);">
          <?php } ?>

          <h1> Sign in as <?= $mode; ?></h1>

          <p>
            <?php if ($mode == "Member") { ?>
              <a href="?mode=Admin"> Sign in as Admin </a>
            <?php } else if ($mode == "Admin") { ?>
              <a href="?mode=Member"> Sign in as Member </a>
            <?php } ?>
          </p>


          <form action="" method="POST">
            <table>
              <tr>
                <td> <label for="username"> Username </label> </td>
                <td>
                  <center> : </center>
                </td>
                <td> <input type="text" name="username" id="username"> </td>
              </tr>

              <tr>
                <td> <label for="password"> Password </label> </td>
                <td>
                  <center> : </center>
                </td>
                <td> <input type="password" name="password" id="password"> </td>
              </tr>

              <tr>
                <td colspan="3">
                  <center> <input type="submit" name="signin" value="Sign In"> </center>
                </td>
              </tr>

              <tr>
                <td> <input type="checkbox" name="remember_me" id="remember-me"> <label for="remember-me"> Remember me </label> </td>
                <td colspan="2"> </td>
              </tr>

              <tr>
                <td colspan="3" class="sign-up"> <a href="#"> Not a member yet? <br> Sign up now! </a> </td>
              </tr>
            </table>
          </div>

          </form>

        </div>

        <?php include "footer.php"; ?>


    </div>

</body>

</html>