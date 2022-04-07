<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KosovaEstate</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/lajmet.css">
  <link rel="stylesheet" href="css/login_register.css">
  <?php
  require_once 'php/newsMapper.php';
  $mapper = new newsMapper();
  $news = $mapper->getAllNews();
  ?>
</head>

<body>
  <?php
  include "components/header.php";
  ?>
  <main>
    <div class="lajmi-container">
      <?php foreach ($news as $lajmet) {
        $uri = 'data:image/png;base64,' . base64_encode($lajmet['img']);
      ?>
        <div class="lajmi">
          <img src="<?php echo $uri ?? 'Unknown'  ?>" id="lajmi-thumbnail">
          <div class="infomarcionet">
            <h1 class="titulli"><?php echo $lajmet['titulli'] ?? 'Unknown'  ?></h1>
            <div class="divider"></div>
            <p id="pershkrimi"><?php echo $lajmet['lajmi'] ?? 'Unknown'  ?></p>
            <div class="divider"></div>
            <p id="added_BY">News was added by user : <?php echo $lajmet['added_By'] ?? 'Unknown'  ?></p>
          </div>
        </div>
      <?php } ?>
    </div>
  </main>
  <?php
  if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
  ?>
    <div class="new-product-button">
      <a href="views/createNews.php" id="btn-new">Shto Lajm te Ri</a>
    </div>
  <?php } ?>
  <?php
  include "components/footer.php";
  ?>


</body>

</html>