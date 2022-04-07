<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KosovaEstate</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/login_register.css">
  <link rel="stylesheet" href="css/about_us.css">

</head>

<body>
  <?php
  include "components/header.php";
  include "php/aboutUsMapper.php";
  $mapper = new aboutUsMapper();
  $strings = $mapper->getAllInfo();
  ?>
  <main>
    <?php foreach ($strings as $info) {
    ?>
      <div>
        <div id="about_us___upper">
          <h2 class="about_us___Titulli"><?php echo $info['string_1']; ?></h2>
          <h3><?php echo $info['string_2']; ?></h3>
          <p class="about_us___Pershkrimi">
            <?php echo $info['string_3']; ?>
          </p>
        </div>
        <div id="about_us___lower">
          <h2><?php echo $info['string_4']; ?></h2>
          <p><?php echo $info['string_5']; ?></p>

        </div>
      </div>
    <?php } ?>
  </main>
  <?php
  include "components/footer.php";
  ?>

</body>

</html>