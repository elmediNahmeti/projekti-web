<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>KosovaEstate</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/login_register.css">
  <link rel="stylesheet" href="css/slider.css">

</head>

<body>
  <?php
  include "components/header.php";
  ?>
  <main>
    <div class="slidshow-container">
      <div class="slide ">
        <img class="sliderImages" src="images/slider1.jpg">
      </div>
      <div class="slide ">
        <img class="sliderImages" src="images/slider2.jpg">
      </div>
      <div class="slide ">
        <img class="sliderImages" src="images/slider3.jpg">
      </div>
      <a class="prev" id="prev">&#10094;</a>
      <a class="next" id="next">&#10095;</a>
    </div>

  </main>
  <?php
  include "components/footer.php";
  ?>

  <script src="js/slider.js"></script>
</body>

</html>