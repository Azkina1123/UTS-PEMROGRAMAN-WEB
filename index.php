<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style.css?v=<?= time(); ?>">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

  <title> Home | Tarvita Cell </title>
</head>

<body>
  <div class="wrapper">

    <?php include "header.php" ?>

    <div class="main-wrapper">

      <div class="banner">

        <h1> Tarvita Cell </h1>
        <p> Raise your level with quality smartphones from various famous brands. </p>

      </div>

      <div class="container">

        <div class="brands-wrapper">

          <div class="xiaomi brand">
            <div class="img-brand"></div>
            <h1> Xiaomi </h1>
          </div>

          <div class="samsung brand">
            <div class="img-brand"></div>
            <h1> Samsung </h1>
          </div>

          <div class="iphone brand">
            <div class="img-brand"></div>
            <h1> IPhone</h1>
          </div>

        </div>

        <p> And there's more other famous brands. </p>

      </div>

      <div class="intro">

        <div class="img"></div>

        <div class="description">
          <p>
            We present you smartphones that suit your taste with great specifications.
          </p>

          <a href="signin.php">
            <button class="purchase"> Purchase Now! </button>
          </a>
        </div>

      </div>

    </div>

    <?php include "footer.php"; ?>

  </div>

</body>

</html>