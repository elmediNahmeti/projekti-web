<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KosovaEstate</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/produkti.css">
  <link rel="stylesheet" href="css/login_register.css">
  <?php
  require_once 'php/produktMapper.php';
  $mapper = new produktMapper();
  $products = $mapper->getAllProducts();
  ?>
</head>

<body>
  <?php
  include "components/header.php";
  ?>

  <main>
    <div class="cotainer_i_produkteve">
      <?php foreach ($products as $produktet) {
        $uri = 'data:image/png;base64,' . base64_encode($produktet['img']);
      ?>
        <div class="produkti_container">
          <a href="<?php printf('%s?id_produkti=%s', 'produkti_template.php', $produktet['id_produkti']) ?>" class="produkti">
            <img src="<?php echo $uri ?? 'Unknown'  ?>" alt="" class="thumbnail">
            <div class="info">
              <h1 class="titulli"><?php echo $produktet['emri'] ?? 'Unknown'  ?></h1>
              <h2 class="cmimi"><?php echo $produktet['cmimi'] ?? 'Unknown' ?>$</h2>
              <h2 class="cmimi"><?php echo "By User: " . $produktet['added_By'] ?? 'Unknown' ?></h2>
            </div>
            <div class="buttonat-buy">
              <button class="btn-buy"><i class="fas fa-shopping-cart fa-3x"></i></button>
              <button class="btn-buy"><i class="fas fa-heart fa-3x"></i></button>
            </div>
          </a>
        </div><?php } ?>
    </div>

  </main>
  <?php

  if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
  ?>
    <div class="new-product-button">
      <a href="views/createProduct.php" id="btn-new">Shto Produkt</a>
    </div>
  <?php } ?>


  <?php
  include "components/footer.php";
  ?>

</body>

</html>