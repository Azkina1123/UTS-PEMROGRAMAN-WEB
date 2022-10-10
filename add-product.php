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

  <title> Add New Product | Admin </title>
</head>

<body>

  <div class="wrapper admin-mode">

    <?php include "admin-header.php"; ?>

    <div class="main-wrapper admin-mode">

      <div class="container">

        <div class="form-wrapper add-product">
          <h1> Add New Product </h1>
          <form action="" method="POST" enctype="multipart/form-data">
            <table cellspacing="20">

              <tr>
                <td> <label for=""> Date Released </label> </td>
                <td>
                  <center> : </center>
                </td>
                <td> <input type="date" name="" id=""> </td>
              </tr>

              <tr>
                <td> <label for=""> Name of Product </label> </td>
                <td>
                  <center> : </center>
                </td>
                <td> <input type="text" name="" id=""> </td>
              </tr>

              <tr>
                <td> <label for=""> Price </label> </td>
                <td>
                  <center> : </center>
                </td>
                <td> <input type="number" name="" id=""> </td>
              </tr>

              <tr>
                <td> <label for=""> Color </label> </td>
                <td>
                  <center> : </center>
                </td>
                <td>
                  <input type="radio" name="color" id="" value="white"> &nbsp; White &nbsp;
                  <input type="radio" name="color" id="" value="black">&nbsp; Black &nbsp;
                  <input type="radio" name="color" id="" value="gold"> &nbsp; Gold &nbsp;
                  <input type="radio" name="color" id="" value="grey"> &nbsp; Grey &nbsp;
                </td>
              </tr>

              <tr>
                <td> <label for=""> Brand </label> </td>
                <td>
                  <center> : </center>
                </td>
                <td>
                  <select>
                    <option value="xiaomi" name="brand"> Xiaomi </option>
                    <option value="samsung" name="brand"> Samsung </option>
                    <option value="iphone" name="brand"> IPhone </option>
                    <option value="oppo" name="brand"> OPPO </option>
                    <option value="vivo" name="brand"> Vivo </option>
                  </select>
                </td>
              </tr>

              <tr>
                <td> <label for=""> Photo </label> </td>
                <td>
                  <center> : </center>
                </td>
                <td> <input type="file" name="" id=""> </td>
              </tr>
              <tr>
                <td colspan="3"> <center> <input type="submit" name="" value="SUBMIT"> </center>  </td>
              </tr>

            </table>
          </form>

        </div>

      </div>

    </div>
    <?php include "footer.php"; ?>

  </div>

</body>

</html>